<?php
/* @var $this StaffController */
/* @var $model Staff */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iris')); ?>:</b>
	<?php echo CHtml::encode($data->iris); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salon_id')); ?>:</b>
	<?php echo CHtml::encode($data->salon_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_role_id')); ?>:</b>
	<?php echo CHtml::encode($data->staff_role_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

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