<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'apprentice-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
<div class="accordion">
	
	<h2 class="reveal">1. Contact Information</h2>
	<div class="elements">

	<div class="row">
		<?php echo $form->hiddenField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'second_name'); ?>
		<?php echo $form->textField($model,'second_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'second_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address1'); ?>
		<?php echo $form->textField($model,'address1',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address2'); ?>
		<?php echo $form->textField($model,'address2',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address3'); ?>
		<?php echo $form->textField($model,'address3',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'address3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode',array('size'=>56,'maxlength'=>56)); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'mobile'); ?>
	</div>
	
	</div> <!--end elements (basic info)-->
	
	<h2 class="reveal">2. Experience</h2>
	<div class="elements">
	
	<div class="row">
		<?php echo $form->labelEx($model,'current_position'); ?>
		<?php echo $form->dropDownList($model,'current_position', $model->getPositionOptions()); ?>
		<?php echo $form->error($model,'current_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in_salon'); ?>
		<?php echo $form->dropDownList($model,'in_salon', $model->getInSalonOptions()); ?>
		<?php echo $form->error($model,'in_salon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salon_name'); ?>
		<?php echo $form->textField($model,'salon_name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'salon_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualification_school'); ?>
		<?php echo $form->dropDownList($model,'qualification_school', $model->getQualSchoolOptions()); ?>
		<?php echo $form->error($model,'qualification_school'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qualification_hair'); ?>
		<?php echo $form->dropDownList($model,'qualification_hair', $model->getQualHairOptions()); ?>
		<?php echo $form->error($model,'qualification_hair'); ?>
	</div>
	
	</div> <!--end elements (experience)-->
	
	<h2 class="reveal">3. Hairdressing Skills</h2>
	<div class="elements">
	
	<p class="application">Please rate your main interests from 1 (least) to 5 (most) for the following:</p>

	<div class="row">
		<?php echo $form->labelEx($model,'cutting'); ?>
		<?php echo $form->dropDownList($model,'cutting', $model->getListOptions()); ?>
		<?php echo $form->error($model,'cutting'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'styling'); ?>
		<?php echo $form->dropDownList($model,'styling', $model->getListOptions()); ?>
		<?php echo $form->error($model,'styling'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colouring'); ?>
		<?php echo $form->dropDownList($model,'colouring', $model->getListOptions()); ?>
		<?php echo $form->error($model,'colouring'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'men'); ?>
		<?php echo $form->dropDownList($model,'men', $model->getListOptions()); ?>
		<?php echo $form->error($model,'men'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'extensions'); ?>
		<?php echo $form->dropDownList($model,'extensions', $model->getListOptions()); ?>
		<?php echo $form->error($model,'extensions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chem_straightening'); ?>
		<?php echo $form->dropDownList($model,'chem_straightening', $model->getListOptions()); ?>
		<?php echo $form->error($model,'chem_straightening'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brazil_blow'); ?>
		<?php echo $form->dropDownList($model,'brazil_blow', $model->getListOptions()); ?>
		<?php echo $form->error($model,'brazil_blow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hair_up'); ?>
		<?php echo $form->dropDownList($model,'hair_up', $model->getListOptions()); ?>
		<?php echo $form->error($model,'hair_up'); ?>
	</div>
	</div> <!--end elements (hairdressing skills)-->
	
	<h2 class="reveal">4. About you</h2>
	<div class="elements">
	
	<div class="row">
		<?php echo $form->labelEx($model,'about'); ?>
		<?php echo $form->textArea($model,'about',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'about'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why_hairdressing'); ?>
		<?php echo $form->textArea($model,'why_hairdressing',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'why_hairdressing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why_jakata'); ?>
		<?php echo $form->textArea($model,'why_jakata',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'why_jakata'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Send your application' : 'Save'); ?>
	</div>
	</div> <!--end elements (about you)-->
</div><!-- end accordion-->

<?php $this->endWidget(); ?>

</div><!-- form -->