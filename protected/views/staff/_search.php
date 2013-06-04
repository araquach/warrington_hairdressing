<?php
/* @var $this StaffController */
/* @var $model Staff */
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
		<?php echo $form->label($model,'person_id'); ?>
		<?php echo $form->textField($model,'person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iris'); ?>
		<?php echo $form->textField($model,'iris'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salon_id'); ?>
		<?php echo $form->textField($model,'salon_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staff_role_id'); ?>
		<?php echo $form->textField($model,'staff_role_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dob'); ?>
		<?php echo $form->textField($model,'dob',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>22,'maxlength'=>22)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'working_hours_week'); ?>
		<?php echo $form->textField($model,'working_hours_week'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'working_hours_month'); ?>
		<?php echo $form->textField($model,'working_hours_month'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'holiday_entitlement'); ?>
		<?php echo $form->textField($model,'holiday_entitlement'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'role'); ?>
		<?php echo $form->textField($model,'role'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->