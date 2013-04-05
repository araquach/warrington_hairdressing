<?php
/* @var $this LieuController */
/* @var $model Lieu */

$this->menu=array(
	array('label'=>'List Lieu', 'url'=>array('staff_lieu_list')),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>