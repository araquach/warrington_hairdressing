<?php
/* @var $this SickController */
/* @var $model Sick */
?>

<div class="detail sick">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'cssFile'=>'false',
	'attributes'=>array(
		'id',
		array(
			'name'=>'Staff'.':',
			'value'=>$model->staff->getFullName(),
			),
		array(
			'name'=>'sick_hours',
			'value'=>$model->hourConverter(),
			),
		'description',
		array(
			'name'=>'Date'.':',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->date_sick_from,"medium",""),
			),
		'date_deducted',
	),
)); ?>

</div> <!--.detail.holiday-->
