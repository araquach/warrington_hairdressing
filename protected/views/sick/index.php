<?php
/* @var $this SickController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sicks',
);

$this->menu=array(
	array('label'=>'Create Sick', 'url'=>array('create')),
	array('label'=>'Manage Sick', 'url'=>array('admin')),
);
?>

<div id="sickPage">

<div class="pageHead sick">

<?php $this->widget('SickWidget'); ?>

<?php $this->widget('SickMenu'); ?>

</div> <!--.pageHead sick-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'cssFile'=>'false',
	'itemView'=>'_view',
)); ?>

</div>