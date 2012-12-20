<?php
/* @var $this WageController */
/* @var $model Wage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
	<?php echo CHtml::encode($data->staff_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hourly_wage')); ?>:</b>
	<?php echo CHtml::encode($data->hourly_wage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_wage')); ?>:</b>
	<?php echo CHtml::encode($data->additional_wage); ?>
	<br />


</div>