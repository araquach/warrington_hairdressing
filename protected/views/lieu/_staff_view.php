<?php
/* @var $this LieuController */
/* @var $model Lieu */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('staff_view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
	<?php echo CHtml::encode($data->staff_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lieu_hours')); ?>:</b>
	<?php echo CHtml::encode($data->lieu_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_regarding')); ?>:</b>
	<?php echo CHtml::encode($data->date_regarding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requested_on')); ?>:</b>
	<?php echo CHtml::encode($data->requested_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approved')); ?>:</b>
	<?php echo CHtml::encode($data->approved); ?>
	<br />


</div>