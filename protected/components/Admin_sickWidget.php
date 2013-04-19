<?php 

class Admin_sickWidget extends CWidget
{

    public function run()
    {
    	// parameter binding required!
    	$q = 'SELECT sum(sick_hours) 
    		FROM sick
    		WHERE staff_id='.Yii::app()->user->id;
    	$cmd = Yii::app()->db->createCommand($q);
    	$total = $cmd->queryScalar();
    	$total /= 8;
    	
        $this->render('admin_sickWidget', array('total' => $total));
    }
}