<?php

abstract class SalonActiveRecord extends CActiveRecord {

/**
* Prepares create_user_id before saving
*/

	protected function beforeValidate()
	{
		$id=Yii::app()->user->id;
		$selection = $this->staff_id;
		
		
			if ($selection==0){
			
			$this->staff_id=$id;
			}
			
			else {
			$this->staff_id=$selection;
			}
			
		return parent::beforeValidate();
	}
	
}