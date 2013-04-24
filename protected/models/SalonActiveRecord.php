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
	
	public function dmy2mysql($input) {
	  $output = false;
	  $d = preg_split('#[-/:. ]#', $input);
	  if (is_array($d) && count($d) == 3) {
	    if (checkdate($d[1], $d[0], $d[2])) {
	      $output = "$d[2]-$d[1]-$d[0]";
	    }
	  }
	  return $output;
	}
}