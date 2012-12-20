<?php
/* @var $this SickController */
/* @var $model Sick */

$this->breadcrumbs=array(
	'Sicks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sick', 'url'=>array('index')),
	array('label'=>'Create Sick', 'url'=>array('create')),
	array('label'=>'View Sick', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sick', 'url'=>array('admin')),
);
?>

<h1>Update Sick <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>