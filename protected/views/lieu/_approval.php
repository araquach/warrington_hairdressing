<?php
/* @var $this HolidayController */
/* @var $model Holiday */
/* @var $form CActiveForm */
?>

<div class="">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'holiday-form',
	'enableAjaxValidation'=>false,
)); ?>


		
	<div class="row group">
		<?php echo $form->labelEx($model,'approved'); ?>
		
		<?php echo '<p class="scale_label">No</p>' ?>
		<?php echo $form->radioButton($model,'approved', array(
		'value'=>1,
		'uncheckValue'=>null));?>
		<?php echo '<p class="scale_label">Yes</p>' ?>
		<?php echo $form->radioButton($model,'approved', array(
		'value'=>2,
		'uncheckValue'=>null));?>
		
		<?php echo $form->error($model,'approved'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Book' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->