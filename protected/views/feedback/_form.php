<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feedback-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->hiddenField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_first'); ?>
		<?php echo $form->textField($model,'client_first',array('size'=>25,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'client_first'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_second'); ?>
		<?php echo $form->textField($model,'client_second',array('size'=>25,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'client_second'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'stylist_id'); ?>
		<?php echo $form->dropDownList($model, 'stylist_id', CHtml::listData(
		FeedbackStylist::model()->findAll(), 'id', 'stylist'),
		array('prompt' => 'Select your Stylist')
		); ?>
		<?php echo $form->error($model,'stylist_id'); ?>
	</div>

	<div class="row question">
			<?php echo $form->labelEx($model,'intro'); ?>
			<?php echo '<p class="scale_label">Very Poor</p>' ?>
			<?php echo $form->radioButton($model,'intro', array(
			'value'=>-2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Poor</p>' ?>
			<?php echo $form->radioButton($model,'intro', array(
			'value'=>-1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Average</p>' ?>
			<?php echo $form->radioButton($model,'intro', array(
			'value'=>1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Good</p>' ?>
			<?php echo $form->radioButton($model,'intro', array(
			'value'=>2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Excellent</p>' ?>
			<?php echo $form->radioButton($model,'intro', array(
			'value'=>3,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'intro'); ?>
		</div>
	
		<div class="row question">
			<?php echo $form->labelEx($model,'consultation'); ?>
			<?php echo '<p class="scale_label">Very Poor</p>' ?>
			<?php echo $form->radioButton($model,'consultation', array(
			'value'=>-2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Poor</p>' ?>
			<?php echo $form->radioButton($model,'consultation', array(
			'value'=>-1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Average</p>' ?>
			<?php echo $form->radioButton($model,'consultation', array(
			'value'=>1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Good</p>' ?>
			<?php echo $form->radioButton($model,'consultation', array(
			'value'=>2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Excellent</p>' ?>
			<?php echo $form->radioButton($model,'consultation', array(
			'value'=>3,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'consultation'); ?>
		</div>
	
		<div class="row question">
			<?php echo $form->labelEx($model,'styling_area'); ?>
			<?php echo '<p class="scale_label">Very Poor</p>' ?>
			<?php echo $form->radioButton($model,'styling_area', array(
			'value'=>-2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Poor</p>' ?>
			<?php echo $form->radioButton($model,'styling_area', array(
			'value'=>-1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Average</p>' ?>
			<?php echo $form->radioButton($model,'styling_area', array(
			'value'=>1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Good</p>' ?>
			<?php echo $form->radioButton($model,'styling_area', array(
			'value'=>2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Excellent</p>' ?>
			<?php echo $form->radioButton($model,'styling_area', array(
			'value'=>3,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'styling_area'); ?>
		</div>
	
		<div class="row question">
			<?php echo $form->labelEx($model,'stylist_appearance'); ?>
			<?php echo '<p class="scale_label">Very Poor</p>' ?>
			<?php echo $form->radioButton($model,'stylist_appearance', array(
			'value'=>-2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Poor</p>' ?>
			<?php echo $form->radioButton($model,'stylist_appearance', array(
			'value'=>-1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Average</p>' ?>
			<?php echo $form->radioButton($model,'stylist_appearance', array(
			'value'=>1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Good</p>' ?>
			<?php echo $form->radioButton($model,'stylist_appearance', array(
			'value'=>2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Excellent</p>' ?>
			<?php echo $form->radioButton($model,'stylist_appearance', array(
			'value'=>3,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'stylist_appearance'); ?>
		</div>
	
		<div class="row question">
			<?php echo $form->labelEx($model,'prod_advice'); ?>
			<?php echo '<p class="scale_label">Very Poor</p>' ?>
			<?php echo $form->radioButton($model,'prod_advice', array(
			'value'=>-2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Poor</p>' ?>
			<?php echo $form->radioButton($model,'prod_advice', array(
			'value'=>-1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Average</p>' ?>
			<?php echo $form->radioButton($model,'prod_advice', array(
			'value'=>1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Good</p>' ?>
			<?php echo $form->radioButton($model,'prod_advice', array(
			'value'=>2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Excellent</p>' ?>
			<?php echo $form->radioButton($model,'prod_advice', array(
			'value'=>3,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'prod_advice'); ?>
		</div>
	
		<div class="row question">
			<?php echo $form->labelEx($model,'styling_advice'); ?>
			<?php echo '<p class="scale_label">Very Poor</p>' ?>
			<?php echo $form->radioButton($model,'styling_advice', array(
			'value'=>-2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Poor</p>' ?>
			<?php echo $form->radioButton($model,'styling_advice', array(
			'value'=>-1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Average</p>' ?>
			<?php echo $form->radioButton($model,'styling_advice', array(
			'value'=>1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Good</p>' ?>
			<?php echo $form->radioButton($model,'styling_advice', array(
			'value'=>2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Excellent</p>' ?>
			<?php echo $form->radioButton($model,'styling_advice', array(
			'value'=>3,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'styling_advice'); ?>
		</div>
	
		<div class="row question">
			<?php echo $form->labelEx($model,'internal_marketing'); ?>
			<?php echo '<p class="scale_label">None</p>' ?>
			<?php echo $form->radioButton($model,'internal_marketing', array(
			'value'=>-2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">One</p>' ?>
			<?php echo $form->radioButton($model,'internal_marketing', array(
			'value'=>-1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Two</p>' ?>
			<?php echo $form->radioButton($model,'internal_marketing', array(
			'value'=>1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Three</p>' ?>
			<?php echo $form->radioButton($model,'internal_marketing', array(
			'value'=>2,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'internal_marketing'); ?>
		</div>
	
		<div class="row question">
			<?php echo $form->labelEx($model,'value_for_money'); ?>
			<?php echo '<p class="scale_label">Very Poor</p>' ?>
			<?php echo $form->radioButton($model,'value_for_money', array(
			'value'=>-2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Poor</p>' ?>
			<?php echo $form->radioButton($model,'value_for_money', array(
			'value'=>-1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Average</p>' ?>
			<?php echo $form->radioButton($model,'value_for_money', array(
			'value'=>1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Good</p>' ?>
			<?php echo $form->radioButton($model,'value_for_money', array(
			'value'=>2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Excellent</p>' ?>
			<?php echo $form->radioButton($model,'value_for_money', array(
			'value'=>3,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'value_for_money'); ?>
		</div>
		
	
		<div class="row question">
			<?php echo $form->labelEx($model,'whole_experience'); ?>
			<?php echo '<p class="scale_label">Very Poor</p>' ?>
			<?php echo $form->radioButton($model,'whole_experience', array(
			'value'=>-2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Poor</p>' ?>
			<?php echo $form->radioButton($model,'whole_experience', array(
			'value'=>-1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Average</p>' ?>
			<?php echo $form->radioButton($model,'whole_experience', array(
			'value'=>1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Good</p>' ?>
			<?php echo $form->radioButton($model,'whole_experience', array(
			'value'=>2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Excellent</p>' ?>
			<?php echo $form->radioButton($model,'whole_experience', array(
			'value'=>3,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'whole_experience'); ?>
		</div>
	
		<div class="row question">
			<?php echo $form->labelEx($model,'end_result'); ?>
			<?php echo '<p class="scale_label">Devastated</p>' ?>
			<?php echo $form->radioButton($model,'end_result', array(
			'value'=>-6,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Unhappy</p>' ?>
			<?php echo $form->radioButton($model,'end_result', array(
			'value'=>-2,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Ok</p>' ?>
			<?php echo $form->radioButton($model,'end_result', array(
			'value'=>1,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Happy</p>' ?>
			<?php echo $form->radioButton($model,'end_result', array(
			'value'=>3,
			'uncheckValue'=>null)); ?>
			<?php echo '<p class="scale_label">Ecstatic</p>' ?>
			<?php echo $form->radioButton($model,'end_result', array(
			'value'=>6,
			'uncheckValue'=>null)); ?>
			<?php echo $form->error($model,'end_result'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'extra'); ?>
			<?php echo $form->textArea($model,'extra',array('rows'=>10,'cols'=>55)); ?>
			<?php echo $form->error($model,'extra'); ?>
		</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->