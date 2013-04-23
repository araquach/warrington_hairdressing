<?php
/* @var $this StaffController */
/* @var $model Staff */
?>

<div class="view">

	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>

	<strong><?php echo CHtml::encode($data->getFullName()); ?></strong>
	<br />
	
	<?php echo CHtml::encode($data->staffRole->job_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->dob, "medium","")); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('working_hours_week')); ?>:</b>
	<?php echo CHtml::encode($data->working_hours_week); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('working_hours_month')); ?>:</b>
	<?php echo CHtml::encode($data->working_hours_month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('holiday_entitlement')); ?>:</b>
	<?php echo CHtml::encode($data->holiday_entitlement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	*/ ?>

</div>