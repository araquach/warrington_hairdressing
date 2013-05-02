<?php
/* @var $this SickController */
/* @var $model Sick */
/* @var $form CActiveForm */
?>

<div class="form sick">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sick-form',
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
	
	<div class="row question">
			<?php echo $form->labelEx($model,'sick_hours'); ?>
			<?php echo '<p class="scale_label">Full Day</p>' ?>
			<?php echo $form->radioButton($model,'sick_hours', array(
			'value'=>8,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Half Day</p>' ?>
			<?php echo $form->radioButton($model,'sick_hours', array(
			'value'=>4,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'sick_hours'); ?>
		</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	
	<div class="row">
			<?php echo $form->labelEx($model,'date_sick_from'); ?>
			<?php echo $form->hiddenField($model,'date_sick_from'); ?>
			<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			    'name'=>'dateSickFrom',
			    'options'=>array(
			    	'dateFormat'=>'dd/mm/yy',
					'altField'=>'#'.CHtml::activeId($model, "date_sick_from"),
					'altFormat'=>'yy-mm-dd',
					'yearRange'=>'-5:+5',
					'changeYear'=>'true',
					'changeMonth'=>'true',			
			    ),	
			    'value'=>$model->date_sick_from ? $model->date_sick_from:null,	   
			));
			?>
			<?php echo $form->error($model,'date_sick_from'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->hiddenField($model,'date_deducted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->