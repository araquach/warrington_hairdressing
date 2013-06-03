<?php
/* @var $this RecruitStylistController */
/* @var $model RecruitStylist */
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
		<?php echo $form->label($model,'person_id'); ?>
		<?php echo $form->textField($model,'person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salon_id'); ?>
		<?php echo $form->textField($model,'salon_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'current_emp'); ?>
		<?php echo $form->textField($model,'current_emp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'current_emp_des'); ?>
		<?php echo $form->textField($model,'current_emp_des',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qual_school'); ?>
		<?php echo $form->textField($model,'qual_school'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qual_non_hair'); ?>
		<?php echo $form->textField($model,'qual_non_hair',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adex1'); ?>
		<?php echo $form->textField($model,'adex1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adex2'); ?>
		<?php echo $form->textField($model,'adex2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adex3'); ?>
		<?php echo $form->textField($model,'adex3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adex4'); ?>
		<?php echo $form->textField($model,'adex4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adex5'); ?>
		<?php echo $form->textField($model,'adex5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adex6'); ?>
		<?php echo $form->textField($model,'adex6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'experience'); ?>
		<?php echo $form->textField($model,'experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'current_position'); ?>
		<?php echo $form->textField($model,'current_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'client_base'); ?>
		<?php echo $form->textField($model,'client_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qual_hair'); ?>
		<?php echo $form->textField($model,'qual_hair'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cutting_skills'); ?>
		<?php echo $form->textField($model,'cutting_skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colour_knowledge'); ?>
		<?php echo $form->textField($model,'colour_knowledge'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colour_skills'); ?>
		<?php echo $form->textField($model,'colour_skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'men'); ?>
		<?php echo $form->textField($model,'men'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extensions_weave'); ?>
		<?php echo $form->textField($model,'extensions_weave'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extensions_other'); ?>
		<?php echo $form->textField($model,'extensions_other'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chem_straighten'); ?>
		<?php echo $form->textField($model,'chem_straighten'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'braz_blow'); ?>
		<?php echo $form->textField($model,'braz_blow'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hair_up'); ?>
		<?php echo $form->textField($model,'hair_up'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'awards'); ?>
		<?php echo $form->textArea($model,'awards',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'about_you'); ?>
		<?php echo $form->textArea($model,'about_you',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'why_hairdressing'); ?>
		<?php echo $form->textArea($model,'why_hairdressing',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'why_us'); ?>
		<?php echo $form->textArea($model,'why_us',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->