<?php
/* @var $this SickController */
/* @var $model Sick */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
	<?php echo CHtml::encode($data->staff_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sick_hours')); ?>:</b>
	<?php echo CHtml::encode($data->sick_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_sick_from')); ?>:</b>
	<?php echo CHtml::encode($data->date_sick_from); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_sick_to')); ?>:</b>
	<?php echo CHtml::encode($data->date_sick_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_deducted')); ?>:</b>
	<?php echo CHtml::encode($data->date_deducted); ?>
	<br />


</div>