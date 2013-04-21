<?php
/* @var $this LieuController */
/* @var $model Lieu */
/* @var $form CActiveForm */
?>

<div class="form lieu">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lieu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'staff_id'); ?>
		<?php echo $form->dropDownList($model, 'staff_id', CHtml::listData(
		Staff::model()->findAll(), 'id', 'fullName'),
		array('prompt' => 'Select Staff Member')); ?>
		<?php echo $form->error($model,'staff_id'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'lieu_hours'); ?>
		<?php echo $form->numberField($model,'lieu_hours'); ?>
		<?php echo $form->error($model,'lieu_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<?php if (Yii::app()->detectMobileBrowser->showMobile): ?> 
	
	<div class="row">
		<?php echo $form->labelEx($model,'date_regarding'); ?>
		<?php echo $form->dateField($model,'date_regarding'); ?>
		<?php echo $form->error($model,'date_regarding'); ?>
	</div>
	
	<?php else: ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date_regarding'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model'=>$model, 'attribute'=>'date_regarding',
		    'options'=>array(
		        'dateFormat'=>'yy-mm-dd',
		        'yearRange'=>'-5:+5',
		        'changeYear'=>'true',
		        'changeMonth'=>'true',
		    ),
		)); ?>
		<?php echo $form->error($model,'date_regarding'); ?>
	</div>
	
	<?php endif; ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'requested_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->