<?php

class HolidayController extends Controller
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
				'actions'=>array('index','view','create','update','delete','admin','staff_holiday','staff_create','staff_holiday_list','staff_view','staff_denied','staff_approval','staff_upcoming'),
				'users'=>array('@'),
				'expression'=>'isset($user->role) && ($user->role==="admin")',
			),
			array('allow', 
				'actions'=>array('staff_holiday','staff_create','staff_view','staff_holiday_list','staff_denied','staff_approval','staff_upcoming'),
				'users'=>array('@'),
				'expression'=>'isset($user->role) && ($user->role==="staff")',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	
	
	public function actionStaff_holiday()
	{	
		$criteria=new CDbCriteria;
		$criteria->with = 'staff';
		$criteria->condition = 'staff.id=' . Yii::app()->user->id;
		$criteria->order = 't.id DESC';
		
		$dataProvider=new CActiveDataProvider('Holiday', array(
			'criteria'=>$criteria			
		));
		
	
		$this->render('staff_holiday',array(
			'dataProvider'=>$dataProvider,
			
		));
		
	}
	
	public function actionStaff_denied()
	{	
		$conditions=array();
		$conditions[]='staff.id=' . Yii::app()->user->id;
		$conditions[]='approved=1';	
	
		$criteria=new CDbCriteria;
		$criteria->with = 'staff';
		$criteria->condition=implode(' AND ',$conditions);
		$criteria->order = 't.request_date_from';
		
		$dataProvider=new CActiveDataProvider('Holiday', array(
			'criteria'=>$criteria			
		));
		
	
		$this->render('staff_denied',array(
			'dataProvider'=>$dataProvider,
		));
		
	}
	
	public function actionStaff_approval()
	{	
		$conditions=array();
		$conditions[]='staff.id=' . Yii::app()->user->id;
		$conditions[]='approved=0';
	
		$criteria=new CDbCriteria;
		$criteria->with = 'staff';
		$criteria->condition=implode(' AND ',$conditions);
		$criteria->order = 't.request_date_from';
		
		$dataProvider=new CActiveDataProvider('Holiday', array(
			'criteria'=>$criteria			
		));
		
	
		$this->render('staff_approval',array(
			'dataProvider'=>$dataProvider,
			
		));
		
	}
	
	public function actionStaff_upcoming()
	{	
		$conditions=array();
		$conditions[]='staff.id=' . Yii::app()->user->id;
		$conditions[]='approved=2';
		$conditions[]='request_date_from >=' . new CDbExpression('NOW()');
	
		$criteria=new CDbCriteria;
		$criteria->with = 'staff';
		$criteria->condition=implode(' AND ',$conditions);
		$criteria->order = 't.request_date_from';
		
		$dataProvider=new CActiveDataProvider('Holiday', array(
			'criteria'=>$criteria			
		));
		
	
		$this->render('staff_upcoming',array(
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
		
				if(isset($_POST['Holiday']))
				{
					$model->attributes=$_POST['Holiday'];
					if($model->save()){
						/*
						$message = new YiiMailMessage;
						$message->view = 'holiday_approval';
						$message->setBody(array('model'=>$model), 'text');
						$message->subject = 'Salon Manager';
						$message->addTo($model->staff->mobile.'@smsid.textapp.net');
						$message->from = ('enquiries@jakatasalon.co.uk');
						
						Yii::app()->mail->send($message);
						*/
						
						$this->redirect(array('index','id'=>$model->id));
					}
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
		$model=new Holiday;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Holiday']))
		{
			$model->attributes=$_POST['Holiday'];
			if($model->save())
				
			$this->redirect(array('view','id'=>$model->id));	
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}
	
	public function actionStaff_create()
		{
			$model=new Holiday;
	
			// Uncomment the following line if AJAX validation is needed
			// $this->performAjaxValidation($model);
	
			if(isset($_POST['Holiday']))
			{
				$model->attributes=$_POST['Holiday'];
				if($model->save()){
				/*
				$message = new YiiMailMessage;
				$message->setBody('There is a new <strong>Holiday</strong> request.<br>From: '.$model->staff->first_name .' '. 
				$model->staff->last_name .
				'<br>Date from: '. Yii::app()->dateFormatter->formatDateTime($model->request_date_from, "medium","") .
				'<br>Date to: '. Yii::app()->dateFormatter->formatDateTime($model->request_date_to, "medium","") .
				'<br>Number of days: '.$model->hourConverter(), 'text/html');
				$message->subject = 'New Holiday Request';
				$message->addTo('adamcarter@jakatasalon.co.uk');
				//$message->addTo('jimmy@jakatasalon.co.uk');
				$message->from = Yii::app()->params['adminEmail'];
				
				Yii::app()->mail->send($message);
				*/
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

		if(isset($_POST['Holiday']))
		{
			$model->attributes=$_POST['Holiday'];
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
		$criteria->order = 't.id DESC';
	
		$dataProvider=new CActiveDataProvider('Holiday', array(
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
		$model=new Holiday('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Holiday']))
			$model->attributes=$_GET['Holiday'];

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
		$model=Holiday::model()->with('staff')->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='holiday-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
