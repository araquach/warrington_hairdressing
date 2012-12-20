<?php
/* @var $this WageController */
/* @var $model Wage */

$this->breadcrumbs=array(
	'Wages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Wage', 'url'=>array('index')),
	array('label'=>'Create Wage', 'url'=>array('create')),
	array('label'=>'View Wage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Wage', 'url'=>array('admin')),
);
?>

<h1>Update Wage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>