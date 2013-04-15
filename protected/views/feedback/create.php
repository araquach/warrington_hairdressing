<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
?>



<div id="feedback_back">

<?php if(Yii::app()->user->hasFlash('Feedback')): ?>

<div class="applicationSuccess">
	<?php echo Yii::app()->user->getFlash('Feedback'); ?>
</div>

<?php else: ?>
<div id="feedback">
<h1>Your Feedback is important to us!</h1>
<h2>PLUS your chance to win some great prizes!</h2>
<p><strong>As a valued Jakata customer, we would love to find out how your experience was in the salon</strong></p>
<p>We strive to offer the best possible service, plus give you a hairstyle that you're 100% happy with!</p>
<p>We would really appreciate it if you could spare a couple of minutes to answer the following questions and give us your honest feedback.</p>
<p><em>As a reward you will be automatically entered into our quarterly prize draw for the chance to win some amazing prizes, including GHD's plus hundreds of pounds worth of vouchers!</em></p>

<p class="small">Your information will not be shared with anyone and is purely for us to ensure we are offering the best possible service along with looking at ways to improve our offering</p>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--feedback-->
</div> <!--feedback_back-->

<?php endif; ?>