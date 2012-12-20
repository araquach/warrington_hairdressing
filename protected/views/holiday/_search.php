<?php
/* @var $this HolidayController */
/* @var $model Holiday */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staff_id'); ?>
		<?php echo $form->textField($model,'staff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hours_requested'); ?>
		<?php echo $form->textField($model,'hours_requested'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prebooked'); ?>
		<?php echo $form->textField($model,'prebooked'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'request_date_from'); ?>
		<?php echo $form->textField($model,'request_date_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'request_date_to'); ?>
		<?php echo $form->textField($model,'request_date_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'approved'); ?>
		<?php echo $form->textField($model,'approved'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requested_on_date'); ?>
		<?php echo $form->textField($model,'requested_on_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->