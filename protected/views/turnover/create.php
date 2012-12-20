<?php
/* @var $this TurnoverController */
/* @var $model Turnover */

$this->breadcrumbs=array(
	'Turnovers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Turnover', 'url'=>array('index')),
	array('label'=>'Manage Turnover', 'url'=>array('admin')),
);
?>

<h1>Create Turnover</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>