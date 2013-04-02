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

<h1>View Your Holiday #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model, 'cssFile'=>'false',
	'attributes'=>array(
		array(
			'name'=>'Day\'s Requested',
			'value'=>$model->hourConverter(),
			),
		array(
			'name'=>'prebooked',
			'value'=>$model->getPrebookedText(),
			),
		array(
			'name'=>'request_date_from',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->request_date_from,"full",""),		
			),
		array(
			'name'=>'request_date_to',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->request_date_to,"full",""),
			),
		array(
			'name'=>'approved',
			'value'=>$model->getApprovedText(),
			),
		
		array(
			'name'=>'requested_on_date',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->requested_on_date,"full",""),
			),
		array(
			'name'=>'Total Holidays',
			'value'=>$model->totalHoliday(),
			),
		
	),
)); ?>
