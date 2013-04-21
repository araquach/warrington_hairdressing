<?php 

class Admin_holidayWidget extends CWidget
{

    public function run()
    {
    	$q = 'SELECT count(approved) 
    		FROM holiday
    		WHERE approved = 0';
    	$cmd = Yii::app()->db->createCommand($q);
    	$pending = $cmd->queryScalar();
    
  		$this->render('admin_holidayWidget', array('pending'=>$pending));
    }
}

