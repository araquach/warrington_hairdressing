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
				'actions'=>array('index','view','create','update','delete','admin','staff_holiday','staff_create','staff_holiday_list','staff_view'),
				'users'=>array('@'),
				'expression'=>'isset($user->role) && ($user->role==="admin")',
			),
			array('allow', 
				'actions'=>array('staff_holiday','staff_create','staff_view','staff_holiday_list'),
				'users'=>array('@'),
				'expression'=>'isset($user->role) && ($user->role==="staff")',
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	/**
	 * The 
	 * 
	 */
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
					if($model->save())
						$this->redirect(array('index','dataProvider'=>$dataProvider));
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
				if($model->save())
					$this->redirect(array('staff_view','id'=>$model->id));
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
