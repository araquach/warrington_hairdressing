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

	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id));  ?>

	
	<strong><?php echo CHtml::encode($data->staff->person->getFullName()); ?></strong>
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hours_requested')); ?>:</b>
	<?php echo CHtml::encode($data->hourConverter()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date_from')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->request_date_from, "medium","")); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('request_date_to')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->request_date_to, "medium","")); ?>
	<br />
	
	<?php if (CHtml::encode($data->saturday) == 1) {
		echo CHtml::image(Yii::app()->request->baseUrl.'/images/icons/icons_1xsat.png');
		} elseif (CHtml::encode($data->saturday) == 2) {
			echo CHtml::image(Yii::app()->request->baseUrl.'/images/icons/icons_2xsat.png');
		}?>
	
	<?php if (CHtml::encode($data->prebooked) == 1) {
		echo CHtml::image(Yii::app()->request->baseUrl.'/images/icons/pb-11.png');
		} ?>
	

</div>