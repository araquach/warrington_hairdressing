<?php
/* @var $this SickController */
/* @var $model Sick */
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
		<?php echo $form->label($model,'staff_id'); ?>
		<?php echo $form->textField($model,'staff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sick_hours'); ?>
		<?php echo $form->textField($model,'sick_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_sick_from'); ?>
		<?php echo $form->textField($model,'date_sick_from'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'date_sick_to'); ?>
		<?php echo $form->textField($model,'date_sick_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_deducted'); ?>
		<?php echo $form->textField($model,'date_deducted'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->