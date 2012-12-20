<?php
/* @var $this WageController */
/* @var $model Wage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wage-form',
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
		<?php echo $form->labelEx($model,'hourly_wage'); ?>
		<?php echo $form->textField($model,'hourly_wage'); ?>
		<?php echo $form->error($model,'hourly_wage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'additional_wage'); ?>
		<?php echo $form->textField($model,'additional_wage'); ?>
		<?php echo $form->error($model,'additional_wage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->