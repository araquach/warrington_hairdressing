<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
?>


<div class="detail feedback">

<h1>View Feedback #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'Date Submitted',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->date,"medium",""),
			),
		'client_first',
		'client_second',
		'stylist.first_name',
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
	),
)); ?>
</div> <!--.detail.feedback-->