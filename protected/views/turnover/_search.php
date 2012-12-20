<?php
/* @var $this TurnoverController */
/* @var $model Turnover */
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
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'service_rev'); ?>
		<?php echo $form->textField($model,'service_rev'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_rev'); ?>
		<?php echo $form->textField($model,'product_rev'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_voucher'); ?>
		<?php echo $form->textField($model,'product_voucher'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->