<?php
/* @var $this WageController */
/* @var $model Wage */

$this->breadcrumbs=array(
	'Wages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Wage', 'url'=>array('index')),
	array('label'=>'Manage Wage', 'url'=>array('admin')),
);
?>

<h1>Create Wage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>