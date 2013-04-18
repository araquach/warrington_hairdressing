<?php
/* @var $this HolidayController */
/* @var $model Holiday */
/* @var $form CActiveForm */
?>

<div class="form holiday">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'holiday-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'staff_id'); ?>
		<?php echo $form->dropDownList($model, 'staff_id', CHtml::listData(
		Staff::model()->findAll(), 'id', 'first_name'),
		array('prompt' => 'Select Staff Member')); ?>
		<?php echo $form->error($model,'staff_id'); ?>
	</div>
	

	<?php if (Yii::app()->detectMobileBrowser->showMobile): ?> 
	
	<div class="row">
		<?php echo $form->labelEx($model,'request_date_from'); ?>
		<?php echo $form->dateField($model,'request_date_from'); ?>
		<?php echo $form->error($model,'request_date_from'); ?>
	</div>
	
	<?php else: ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'request_date_from'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model'=>$model, 'attribute'=>'request_date_from',
		    'options'=>array(
		        'dateFormat'=>'yy-mm-dd',
		        'yearRange'=>'-3:+5',
		        'changeYear'=>'true',
		        'changeMonth'=>'true',
		    ),
		)); ?>
		<?php echo $form->error($model,'request_date_from'); ?>
	</div>
	
	<?php endif; ?>

	<?php if (Yii::app()->detectMobileBrowser->showMobile): ?> 
	<div class="row">
		<?php echo $form->labelEx($model,'request_date_to'); ?>
		<?php echo $form->dateField($model,'request_date_to'); ?>
		<?php echo $form->error($model,'request_date_to'); ?>
	</div>
	
	<?php else: ?>
		
	<div class="row">
		<?php echo $form->labelEx($model,'request_date_to'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model'=>$model, 'attribute'=>'request_date_to',
		    'options'=>array(
		        'dateFormat'=>'yy-mm-dd',
		        'yearRange'=>'-3:+5',
		        'changeYear'=>'true',
		        'changeMonth'=>'true',
		    ),
		)); ?>
		<?php echo $form->error($model,'request_date_to'); ?>
	</div>	
	
	<?php endif; ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'hours_requested'); ?>
		<?php echo $form->dateField($model,'hours_requested'); ?>
		<?php echo $form->error($model,'hours_requested'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'requested_on_date'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'approved'); ?>
		<?php echo $form->checkBox($model,'approved'); ?>
		<?php echo $form->error($model,'approved'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Book' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->						