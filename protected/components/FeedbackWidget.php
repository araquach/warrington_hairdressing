<?php 

class FeedbackWidget extends CWidget
{

    public function run()
    {
    	
    
        $this->render('feedbackWidget', array('total'=>$total));
    }
}