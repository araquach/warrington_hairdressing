<?php
/* @var $this HolidayController */
/* @var $model Holiday */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('staff_view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_requested')); ?>:</b>
	<?php echo CHtml::encode($data->hourConverter()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prebooked')); ?>:</b>
	<?php echo CHtml::encode($data->preBooked()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date_from')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->request_date_from, "full","")); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date_to')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->request_date_to, "full","")); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approved')); ?>:</b>
	<?php echo CHtml::encode($data->getApprovedText()); ?>
	<br />
	
	
	<?php echo CHtml::encode($data->totalHoliday()); ?>
	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('requested_on_date')); ?>:</b>
	<?php echo CHtml::encode($data->requested_on_date); ?>
	<br />

	*/ ?>

</div>