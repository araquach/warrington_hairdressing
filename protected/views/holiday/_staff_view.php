<?php
/* @var $this HolidayController */
/* @var $model Holiday */
?>

<div class="view <?php if ($data->approved == 1) {
	echo 'unapproved'; } elseif ($data->approved == 2) {
		echo 'approved'; } else {
			echo 'pending';
		}
?> " >

	<?php echo CHtml::link(CHtml::encode($data->id), array('staff_view', 'id'=>$data->id)); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_requested')); ?>:</b>
	<?php echo CHtml::encode($data->hourConverter()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date_from')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->request_date_from, "short","")); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date_to')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->request_date_to, "short","")); ?>
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