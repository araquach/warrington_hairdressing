<?php
/* @var $this HolidayController */
/* @var $model Holiday */

$this->breadcrumbs=array(
	'Holidays'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Holiday', 'url'=>array('staff_holiday_list')),
	array('label'=>'Create Holiday', 'url'=>array('staff_create')),
);

?>
<div class="detail holiday">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model, 'cssFile'=>'false',
	'attributes'=>array(
		array(
			'name'=>'Days'.':',
			'value'=>$model->hourConverter(),
			),
		array(
			'name'=>'prebooked'.':',
			'value'=>$model->getPrebookedText(),
			),
		array(
			'name'=>'from'.':',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->request_date_from,"full",""),		
			),
		array(
			'name'=>'to'.':',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->request_date_to,"full",""),
			),
		array(
			'name'=>'approved'.':',
			'value'=>$model->getApprovedText(),
			),
		
		array(
			'name'=>'requested'.':',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->requested_on_date,"full",""),
			),
		),
)); ?>

		
		
</div> <!--#holiday-->

<?php echo CHtml::link('<p class="pageLink">Back to the full list</p>', array('/holiday/staff_holiday')); ?>