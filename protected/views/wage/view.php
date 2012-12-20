<?php
/* @var $this WageController */
/* @var $model Wage */

$this->breadcrumbs=array(
	'Wages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Wage', 'url'=>array('index')),
	array('label'=>'Create Wage', 'url'=>array('create')),
	array('label'=>'Update Wage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Wage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Wage', 'url'=>array('admin')),
);
?>

<h1>View Wage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'staff_id',
		'hourly_wage',
		'additional_wage',
	),
)); ?>
