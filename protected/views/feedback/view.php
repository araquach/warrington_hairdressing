<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
?>


<div class="detail feedback">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'cssFile'=>'false',
	'attributes'=>array(
		array(
			'name'=>'Date Submitted',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->date,"medium",""),
			),
		array(
			'name'=>'Client Name'.':',
			'value'=>$model->client_first . ' ' . $model->client_second,
			),
		array(
			'name'=>'Last Stylist'.':',
			'value'=>$model->staff->first_name . ' ' . $model->staff->last_name,
			),
		'mobile',
		'intro',
		'consultation',
		'styling_area',
		'stylist_appearance',
		'prod_advice',
		'styling_advice',
		'internal_marketing',
		'value_for_money',
		'whole_experience',
		'end_result',
		'extra',
		
		array(
			'name'=>'Score'.':',
			'value'=>$model->score(),
			),
		'allow',
	),
)); ?>
</div> <!--.detail.feedback-->