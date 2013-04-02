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