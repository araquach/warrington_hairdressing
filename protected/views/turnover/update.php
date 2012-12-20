<?php
/* @var $this TurnoverController */
/* @var $model Turnover */

$this->breadcrumbs=array(
	'Turnovers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Turnover', 'url'=>array('index')),
	array('label'=>'Create Turnover', 'url'=>array('create')),
	array('label'=>'View Turnover', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Turnover', 'url'=>array('admin')),
);
?>

<h1>Update Turnover <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>