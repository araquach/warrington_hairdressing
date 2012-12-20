<?php
/* @var $this LieuController */
/* @var $model Lieu */

$this->menu=array(
	array('label'=>'Add/Take Lieu Hours', 'url'=>array('staff_create')),
);

?>

<h1>Your Requested Lieu Hours</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_staff_view',
)); ?>