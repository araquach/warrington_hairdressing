<?php
/* @var $this SickController */
/* @var $model Sick */

$this->breadcrumbs=array(
	'Sicks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sick', 'url'=>array('index')),
	array('label'=>'Create Sick', 'url'=>array('create')),
	array('label'=>'Update Sick', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sick', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sick', 'url'=>array('admin')),
);
?>

<h1>View Sick #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'staff.first_name',
		array(
		'name'=>'sick_hours',
		'value'=>$model->hourConverter(),
		),
		'description',
		'date_sick_from',
		'date_deducted',
	),
)); ?>
