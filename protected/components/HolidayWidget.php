<?php 

class HolidayWidget extends CWidget
{

    public function run()
    {
    	// total holiday calculation
        $total = Yii::app()->db->createCommand()
        ->select('sum(hours_requested)')
        ->from('holiday')
        ->where('staff_id=' . Yii::app()->user->id)
        ->queryScalar();
        
        $total = $total/8;
        
        // remaining holiday calculation
        $entitlement = Yii::app()->db->createCommand()
        ->select('holiday_entitlement')
        ->from('staff')
        ->where('id=' . Yii::app()->user->id)
        ->queryScalar();
        
        $remaining = $entitlement - $total;
        
        
        $this->render('holidayWidget', array('total'=>$total, 'remaining'=>$remaining));
    }
}

