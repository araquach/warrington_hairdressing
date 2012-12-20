<?php
/* @var $this WageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wages',
);

$this->menu=array(
	array('label'=>'Create Wage', 'url'=>array('create')),
	array('label'=>'Manage Wage', 'url'=>array('admin')),
);
?>

<h1>Wages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
