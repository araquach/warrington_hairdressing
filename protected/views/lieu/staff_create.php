<?php
/* @var $this LieuController */
/* @var $model Lieu */

$this->menu=array(
	array('label'=>'List Lieu', 'url'=>array('staff_lieu_list')),
);
?>

<h1>Add/Take Lieu hours</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>