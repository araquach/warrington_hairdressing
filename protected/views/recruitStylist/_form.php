<?php
/* @var $this RecruitStylistController */
/* @var $model RecruitStylist */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recruit-stylist-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'applicant_id'); ?>
		<?php echo $form->textField($model,'applicant_id'); ?>
		<?php echo $form->error($model,'applicant_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_emp'); ?>
		<?php echo $form->textField($model,'current_emp'); ?>
		<?php echo $form->error($model,'current_emp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_emp_des'); ?>
		<?php echo $form->textField($model,'current_emp_des',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'current_emp_des'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qual_school'); ?>
		<?php echo $form->textField($model,'qual_school'); ?>
		<?php echo $form->error($model,'qual_school'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qual_non_hair'); ?>
		<?php echo $form->textField($model,'qual_non_hair',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'qual_non_hair'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adex1'); ?>
		<?php echo $form->textField($model,'adex1'); ?>
		<?php echo $form->error($model,'adex1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adex2'); ?>
		<?php echo $form->textField($model,'adex2'); ?>
		<?php echo $form->error($model,'adex2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adex3'); ?>
		<?php echo $form->textField($model,'adex3'); ?>
		<?php echo $form->error($model,'adex3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adex4'); ?>
		<?php echo $form->textField($model,'adex4'); ?>
		<?php echo $form->error($model,'adex4'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adex5'); ?>
		<?php echo $form->textField($model,'adex5'); ?>
		<?php echo $form->error($model,'adex5'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adex6'); ?>
		<?php echo $form->textField($model,'adex6'); ?>
		<?php echo $form->error($model,'adex6'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experience'); ?>
		<?php echo $form->textField($model,'experience'); ?>
		<?php echo $form->error($model,'experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_position'); ?>
		<?php echo $form->textField($model,'current_position'); ?>
		<?php echo $form->error($model,'current_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_base'); ?>
		<?php echo $form->textField($model,'client_base'); ?>
		<?php echo $form->error($model,'client_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qual_hair'); ?>
		<?php echo $form->textField($model,'qual_hair'); ?>
		<?php echo $form->error($model,'qual_hair'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cutting_skills'); ?>
		<?php echo $form->textField($model,'cutting_skills'); ?>
		<?php echo $form->error($model,'cutting_skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colour_knowledge'); ?>
		<?php echo $form->textField($model,'colour_knowledge'); ?>
		<?php echo $form->error($model,'colour_knowledge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colour_skills'); ?>
		<?php echo $form->textField($model,'colour_skills'); ?>
		<?php echo $form->error($model,'colour_skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'men'); ?>
		<?php echo $form->textField($model,'men'); ?>
		<?php echo $form->error($model,'men'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extensions_weave'); ?>
		<?php echo $form->textField($model,'extensions_weave'); ?>
		<?php echo $form->error($model,'extensions_weave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extensions_other'); ?>
		<?php echo $form->textField($model,'extensions_other'); ?>
		<?php echo $form->error($model,'extensions_other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chem_straighten'); ?>
		<?php echo $form->textField($model,'chem_straighten'); ?>
		<?php echo $form->error($model,'chem_straighten'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'braz_blow'); ?>
		<?php echo $form->textField($model,'braz_blow'); ?>
		<?php echo $form->error($model,'braz_blow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hair_up'); ?>
		<?php echo $form->textField($model,'hair_up'); ?>
		<?php echo $form->error($model,'hair_up'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'awards'); ?>
		<?php echo $form->textArea($model,'awards',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'awards'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'about_you'); ?>
		<?php echo $form->textArea($model,'about_you',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about_you'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why_hairdressing'); ?>
		<?php echo $form->textArea($model,'why_hairdressing',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'why_hairdressing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why_us'); ?>
		<?php echo $form->textArea($model,'why_us',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'why_us'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->