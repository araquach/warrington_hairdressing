<?php
/* @var $this SalonController */
/* @var $model Salon */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salon')); ?>:</b>
	<?php echo CHtml::encode($data->salon); ?>
	<br />


</div>