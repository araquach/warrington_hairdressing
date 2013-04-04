<?php 

class LieuWidget extends CWidget
{

    public function run()
    {
        $criteria = new CDbCriteria();
        $criteria->with = 'staff';
        $criteria->condition = 'staff.id=' . Yii::app()->user->id;
        $criteria->select = 'lieu_hours';
        
        $total = Lieu::model()->count($criteria);
        
        $this->render('lieuWidget', array('total'=>$total));
    }
}