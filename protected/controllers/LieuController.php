<?php

class LieuController extends Controller
{

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			
			array('allow', 
				'actions'=>array('index','view','create','update','delete','admin','staff_lieu','staff_create','staff_lieu_list','staff_view'),
				'users'=>array('@'),
				'expression'=>'isset($user->role) && ($user->role==="admin")',
			),
			array('allow', 
				'actions'=>array('view','create','update','delete','admin','staff_lieu','staff_create','staff_lieu_list','staff_view'),
				'users'=>array('@'),
				'expression'=>'isset($user->role) && ($user->role==="staff")',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}	
	
	public function actionStaff_lieu()
	{
		$criteria=new CDbCriteria;
		$criteria->with = 'staff';
		$criteria->condition = 'staff.id=' . Yii::app()->user->id;
		$criteria->order = 't.date_regarding';
		
		$dataProvider=new CActiveDataProvider('Lieu', array(
			'criteria'=>$criteria
		));
		
		$this->render('staff_lieu',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$model=$this->loadModel($id);
		
				// Uncomment the following line if AJAX validation is needed
				// $this->performAjaxValidation($model);
		
				if(isset($_POST['Lieu']))
				{
					$model->attributes=$_POST['Lieu'];
					if($model->save())
					{
					
						$message = new YiiMailMessage;
						$message->view = 'lieu_approval';
						$message->setBody(array('model'=>$model), 'text');
						$message->subject = 'Salon Manager';
						$message->addTo($model->staff->mobile.'@smsid.textapp.net');
						$message->from = ('enquiries@jakatasalon.co.uk');
						
						Yii::app()->mail->send($message);
						
						}
						$this->redirect(array('index'));
				}
			
			$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	public function actionStaff_view($id)
	{
		$this->render('staff_view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Lieu;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Lieu']))
		{
			$model->attributes=$_POST['Lieu'];
			if($model->save())
				
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionStaff_create()
		{
			$model=new Lieu;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['Lieu']))
			{
				$model->attributes=$_POST['Lieu'];
				if($model->save()){
				
					$message = new YiiMailMessage;
					$message->setBody('There is a new <strong>Lieu</strong> request.<br>From: '.$model->staff->first_name .' '. 
					$model->staff->last_name .
					'<br>Date regarding: '. Yii::app()->dateFormatter->formatDateTime($model->date_regarding, "medium","") .
					'<br>Number of hours: '.$model->lieu_hours.
					'<br>Reason: ' . $model->description, 'text/html');
					$message->subject = 'New Lieu Request';
					$message->addTo('adamcarter@jakatasalon.co.uk');
					//$message->addTo('jimmy@jakatasalon.co.uk');
					$message->from = Yii::app()->params['adminEmail'];
					
					Yii::app()->mail->send($message);
					
					$this->redirect(array('staff_view','id'=>$model->id));
					}
			}
	
			$this->render('staff_create',array(
				'model'=>$model,
			));
		}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Lieu']))
		{
			$model->attributes=$_POST['Lieu'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$criteria=new CDbCriteria();
		$criteria->with = 'staff';
		$criteria->order = 't.date_regarding';
	
		$dataProvider=new CActiveDataProvider('Lieu', array(
			'criteria'=>$criteria
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Lieu('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Lieu']))
			$model->attributes=$_GET['Lieu'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Lieu::model()->with('staff')->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='lieu-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
