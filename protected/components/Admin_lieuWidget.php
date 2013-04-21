<?php 

class Admin_lieuWidget extends CWidget
{

    public function run()
    {      
     	$q = 'SELECT count(approved) 
     		FROM lieu
     		WHERE approved = 0';
     	$cmd = Yii::app()->db->createCommand($q);
     	$pending = $cmd->queryScalar();
     	 
        $this->render('admin_lieuWidget', array('pending'=>$pending));
    }
}