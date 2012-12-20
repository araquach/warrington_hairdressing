<?php
/* @var $this SalonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salons',
);

$this->menu=array(
	array('label'=>'Create Salon', 'url'=>array('create')),
	array('label'=>'Manage Salon', 'url'=>array('admin')),
);
?>

<?php echo Yii::app()->user->name ?>

<h1>Salons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
