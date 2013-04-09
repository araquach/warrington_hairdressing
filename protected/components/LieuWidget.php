<?php 

class LieuWidget extends CWidget
{

    public function run()
    {
        $q = 'SELECT sum(lieu_hours) 
        	FROM lieu
        	WHERE staff_id='.Yii::app()->user->id. ' AND approved=2';
        $cmd = Yii::app()->db->createCommand($q);
        $total = $cmd->queryScalar();
        
        $this->render('lieuWidget', array('total'=>$total));
    }
}