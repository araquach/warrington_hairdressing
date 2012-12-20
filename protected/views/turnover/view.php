<?php
/* @var $this TurnoverController */
/* @var $model Turnover */

$this->breadcrumbs=array(
	'Turnovers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Turnover', 'url'=>array('index')),
	array('label'=>'Create Turnover', 'url'=>array('create')),
	array('label'=>'Update Turnover', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Turnover', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Turnover', 'url'=>array('admin')),
);
?>

<h1>View Turnover #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'staff_id',
		'date',
		'service_rev',
		'product_rev',
		'product_voucher',
	),
)); ?>
