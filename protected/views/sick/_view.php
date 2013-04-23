<?php
/* @var $this SickController */
/* @var $model Sick */
?>

<div class="view">

	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>

	<?php echo CHtml::encode($data->staff->getFullName()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sick_hours')); ?>:</b>
	<?php echo CHtml::encode($data->hourConverter()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_sick_from')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->date_sick_from, "medium","")); ?>
	<br />


</div>