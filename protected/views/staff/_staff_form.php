<?php
/* @var $this StaffController */
/* @var $model Staff */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'staff-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
		<?php echo $form->textField($model,'person_id'); ?>
		<?php echo $form->error($model,'person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iris'); ?>
		<?php echo $form->textField($model,'iris'); ?>
		<?php echo $form->error($model,'iris'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salon_id'); ?>
		<?php echo $form->dropDownList($model, 'salon_id', CHtml::listData(
		Salon::model()->findAll(), 'id', 'salon'),
		array('prompt' => 'Select Salon')); ?>
		<?php echo $form->error($model,'salon_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_role_id'); ?>
		<?php echo $form->dropDownList($model, 'staff_role_id', CHtml::listData(
		StaffRole::model()->findAll(), 'id', 'job_description'),
		array('prompt' => 'Select Job Role')); ?>
		<?php echo $form->error($model,'staff_role_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model'=>$model, 'attribute'=>'dob',
		    'options'=>array(
		        'dateFormat'=>'yy-mm-dd',
		        'yearRange'=>'-70:+0',
		        'changeYear'=>'true',
		        'changeMonth'=>'true',
		    ),
		)); ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>22,'maxlength'=>22)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>44,'maxlength'=>44)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'working_hours_week'); ?>
		<?php echo ZHtml::enumDropDownList( $model,'working_hours_week' ); ?>
		<?php echo $form->error($model,'working_hours_week'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'holiday_entitlement'); ?>
		<?php echo $form->textField($model,'holiday_entitlement'); ?>
		<?php echo $form->error($model,'holiday_entitlement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo ZHtml::enumDropDownList( $model,'role' ); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->