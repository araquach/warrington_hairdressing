<?php 

class LieuWidget extends CWidget
{

    public function run()
    {
        $total = Yii::app()->db->createCommand()
        ->select('sum(lieu_hours)')
        ->from('lieu')
        ->where('staff_id=' . Yii::app()->user->id)
        ->queryScalar();
        
        $this->render('lieuWidget', array('total'=>$total));
    }
}