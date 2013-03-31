<?php
/* @var $this LieuController */
/* @var $model Lieu */

$this->breadcrumbs=array(
	'Lieus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Your Lieu Hours', 'url'=>array('staff_lieu_list')),
	array('label'=>'Add/Take Lieu Hours', 'url'=>array('staff_create')),
);
?>

<h1>View Lieu #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'lieu_hours',
		'description',
		array(
			'name'=>'date_regarding',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->date_regarding,"short",""),		
			),
		array(
			'name'=>'requested_on',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->requested_on,"short",""),		
			),
		array(
			'name'=>'approved',
			'value'=>$model->getApprovedText(),
			),
	),
)); ?>
