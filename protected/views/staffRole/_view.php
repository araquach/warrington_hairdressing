<?php
/* @var $this StaffRoleController */
/* @var $model StaffRole */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_description')); ?>:</b>
	<?php echo CHtml::encode($data->job_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target')); ?>:</b>
	<?php echo CHtml::encode($data->target); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commision')); ?>:</b>
	<?php echo CHtml::encode($data->commision); ?>
	<br />


</div>