<?php
/* @var $this LieuController */
/* @var $model Lieu */

$this->breadcrumbs=array(
	'Lieus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lieu', 'url'=>array('index')),
	array('label'=>'Create Lieu', 'url'=>array('create')),
	array('label'=>'View Lieu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Lieu', 'url'=>array('admin')),
);
?>

<h1>Update Lieu <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>