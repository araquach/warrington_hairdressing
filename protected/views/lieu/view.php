<?php
/* @var $this LieuController */
/* @var $model Lieu */

$this->breadcrumbs=array(
	'Lieus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Lieu', 'url'=>array('index')),
	array('label'=>'Create Lieu', 'url'=>array('create')),
	array('label'=>'Update Lieu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Lieu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Lieu', 'url'=>array('admin')),
);
?>

<h1>View Lieu #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'Staff Member',
			'value'=>$model->staff->first_name . ' ' . $model->staff->last_name,
			),
		'lieu_hours',
		'description',
		array(
			'name'=>'date_regarding',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->date_regarding,"full",""),		
			),
		array(
			'name'=>'requested_on',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->requested_on,"full",""),		
			),
		array(
			'name'=>'approved',
			'value'=>$model->getApprovedText(),
			),
	),
)); ?>

<?php echo $this->renderPartial('_approval', array('model'=>$model)); ?>



