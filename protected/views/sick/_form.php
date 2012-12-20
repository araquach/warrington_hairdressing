<?php
/* @var $this SickController */
/* @var $model Sick */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sick-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_id'); ?>
		<?php echo $form->dropDownList($model, 'id', CHtml::listData(
		Staff::model()->findAll(), 'id','id'),
		array('prompt' => 'Select Staff Member')); ?>
		<?php echo $form->error($model,'staff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sick_hours'); ?>
		<?php echo $form->textField($model,'sick_hours'); ?>
		<?php echo $form->error($model,'sick_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_sick_from'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model'=>$model, 'attribute'=>'date_sick_from',
		    'options'=>array(
		        'dateFormat'=>'yy-mm-dd',
		        'yearRange'=>'-5:+5',
		        'changeYear'=>'true',
		        'changeMonth'=>'true',
		    ),
		)); ?>
		<?php echo $form->error($model,'date_sick_from'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'date_sick_to'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model'=>$model, 'attribute'=>'date_sick_to',
		    'options'=>array(
		        'dateFormat'=>'yy-mm-dd',
		        'yearRange'=>'-5:+5',
		        'changeYear'=>'true',
		        'changeMonth'=>'true',
		    ),
		)); ?>
		<?php echo $form->error($model,'date_sick_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'date_deducted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->