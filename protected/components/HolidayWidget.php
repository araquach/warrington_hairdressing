<?php 

class HolidayWidget extends CWidget
{

    public function run()
    {
        $criteria = new CDbCriteria();
        //$criteria->with = 'staff';
        //$criteria->condition = 'staff.id=' . Yii::app()->user->id;
        $criteria->select = 'hours_requested';
        
        $total = Holiday::model()->count($criteria);
        
        $this->render('holidayWidget', array('total'=>$total));
    }
}