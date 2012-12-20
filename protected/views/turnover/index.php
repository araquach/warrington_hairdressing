<?php
/* @var $this TurnoverController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Turnovers',
);

$this->menu=array(
	array('label'=>'Create Turnover', 'url'=>array('create')),
	array('label'=>'Manage Turnover', 'url'=>array('admin')),
);
?>

<h1>Turnovers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
