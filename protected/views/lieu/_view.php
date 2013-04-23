<?php
/* @var $this LieuController */
/* @var $model Lieu */
?>

<div class="view <?php if ($data->approved == 1) {
	echo 'unapproved'; } elseif ($data->approved == 2) {
		echo 'approved'; } else {
			echo 'pending';
		}
?> " >

	
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>

	<?php echo CHtml::encode($data->staff->getFullName()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lieu_hours')); ?>:</b>
	<?php echo CHtml::encode($data->lieu_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_regarding')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->date_regarding, "medium","")); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requested_on')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->requested_on, "medium","")); ?>
	<br />


</div>