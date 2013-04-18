<?php
/* @var $this HolidayController */
/* @var $model Holiday */
?>

<div class="view <?php if (CHtml::encode($data->approved) == 1) {
	echo 'unapproved'; } elseif (CHtml::encode($data->approved) == 2) {
		echo 'approved'; } else {
			echo 'pending';
		}
?> " >

	<?php echo CHtml::link(CHtml::encode($data->id), array('staff_view', 'id'=>$data->id)); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_requested')); ?>:</b>
	<?php echo CHtml::encode($data->hourConverter()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date_from')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->request_date_from, "medium","")); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date_to')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->request_date_to, "medium","")); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('saturday')); ?>:</b>
	<?php echo CHtml::encode($data->saturday); ?>
	<br />
	
	<?php if (CHtml::encode($data->prebooked) == 1) {
		echo CHtml::image('images/icons/pb-11.png');
		} ?>
	<br />
</div>

