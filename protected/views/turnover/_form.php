<?php
/* @var $this TurnoverController */
/* @var $model Turnover */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turnover-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_id'); ?>
		<?php echo $form->dropDownList($model, 'id', CHtml::listData(
		Staff::model()->findAll(), 'id', 'first_name'),
		array('prompt' => 'Select Staff Member')); ?>
		<?php echo $form->error($model,'staff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service_rev'); ?>
		<?php echo $form->textField($model,'service_rev'); ?>
		<?php echo $form->error($model,'service_rev'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_rev'); ?>
		<?php echo $form->textField($model,'product_rev'); ?>
		<?php echo $form->error($model,'product_rev'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_voucher'); ?>
		<?php echo $form->textField($model,'product_voucher'); ?>
		<?php echo $form->error($model,'product_voucher'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->