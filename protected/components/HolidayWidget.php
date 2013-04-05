<?php 

class HolidayWidget extends CWidget
{

    public function run()
    {
        $total = Yii::app()->db->createCommand()
        ->select('sum(hours_requested)')
        ->from('holiday')
        ->where('staff_id=' . Yii::app()->user->id)
        ->queryScalar();
        
        $total =$total/8;
        
        $this->render('holidayWidget', array('total'=>$total));
    }
}

