<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
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
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'client_first'); ?>
		<?php echo $form->textField($model,'client_first',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'client_second'); ?>
		<?php echo $form->textField($model,'client_second',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intro'); ?>
		<?php echo $form->textField($model,'intro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consultation'); ?>
		<?php echo $form->textField($model,'consultation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'styling_area'); ?>
		<?php echo $form->textField($model,'styling_area'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stylist_appearance'); ?>
		<?php echo $form->textField($model,'stylist_appearance'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prod_advice'); ?>
		<?php echo $form->textField($model,'prod_advice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'styling_advice'); ?>
		<?php echo $form->textField($model,'styling_advice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'internal_marketing'); ?>
		<?php echo $form->textField($model,'internal_marketing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value_for_money'); ?>
		<?php echo $form->textField($model,'value_for_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'whole_experience'); ?>
		<?php echo $form->textField($model,'whole_experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_result'); ?>
		<?php echo $form->textField($model,'end_result'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extra'); ?>
		<?php echo $form->textField($model,'extra',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stylist_id'); ?>
		<?php echo $form->textField($model,'stylist_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->