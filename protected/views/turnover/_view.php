<?php
/* @var $this TurnoverController */
/* @var $model Turnover */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
	<?php echo CHtml::encode($data->staff_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_rev')); ?>:</b>
	<?php echo CHtml::encode($data->service_rev); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_rev')); ?>:</b>
	<?php echo CHtml::encode($data->product_rev); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_voucher')); ?>:</b>
	<?php echo CHtml::encode($data->product_voucher); ?>
	<br />


</div>