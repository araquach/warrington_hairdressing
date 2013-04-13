<?php 

class HolidayWidget extends CWidget
{

    public function run()
    {
    	// parameter binding required!
    	$q = 'SELECT sum(hours_requested) 
    		FROM holiday
    		WHERE staff_id='.Yii::app()->user->id. ' AND approved!=1';
    	$cmd = Yii::app()->db->createCommand($q);
    	$total = $cmd->queryScalar();
    	$total /= 8;
        
        
        // remaining holiday calculation
        $entitlement = Yii::app()->db->createCommand()
        ->select('holiday_entitlement')
        ->from('staff')
        ->where('id=' . Yii::app()->user->id)
        ->queryScalar();
        
        $remaining = $entitlement - $total;
        
        //Saturday Calculator
        $q = 'SELECT sum(saturday) 
        	FROM holiday
        	WHERE staff_id='.Yii::app()->user->id. ' AND approved<>1';
        $cmd = Yii::app()->db->createCommand($q);
        $saturday = $cmd->queryScalar();
        
        $saturday = 4 - $saturday;
        
        
        $this->render('holidayWidget', array('total'=>$total, 'entitlement'=>$entitlement, 'remaining'=>$remaining, 'saturday'=>$saturday));
    }
}

