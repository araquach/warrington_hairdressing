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
	'data'=>$model,
	'attributes'=>array(
		'id',
		'staff_id',
		'hours_requested',
		'prebooked',
		'request_date_from',
		'request_date_to',
		'approved',
		'requested_on_date',
	),
)); ?>
