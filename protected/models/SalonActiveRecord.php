<?php

abstract class SalonActiveRecord extends CActiveRecord {

/**
* Prepares create_user_id before saving
*/

	protected function beforeSave()
	{
		$id=Yii::app()->user->id;
		
		if($this->isNewRecord)
			$this->staff_id=$id;
		
		return parent::beforeSave();
	}
}