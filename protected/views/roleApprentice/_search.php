<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'apprentice_id'); ?>
		<?php echo $form->textField($model,'apprentice_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'second_name'); ?>
		<?php echo $form->textField($model,'second_name',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address1'); ?>
		<?php echo $form->textField($model,'address1',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address2'); ?>
		<?php echo $form->textField($model,'address2',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address3'); ?>
		<?php echo $form->textField($model,'address3',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode',array('size'=>56,'maxlength'=>56)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'current_position'); ?>
		<?php echo $form->textField($model,'current_position'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_salon'); ?>
		<?php echo $form->textField($model,'in_salon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salon_name'); ?>
		<?php echo $form->textField($model,'salon_name',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qualification_school'); ?>
		<?php echo $form->textField($model,'qualification_school'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qualification_hair'); ?>
		<?php echo $form->textField($model,'qualification_hair'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cutting'); ?>
		<?php echo $form->textField($model,'cutting'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'styling'); ?>
		<?php echo $form->textField($model,'styling'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colouring'); ?>
		<?php echo $form->textField($model,'colouring'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'men'); ?>
		<?php echo $form->textField($model,'men'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'extensions'); ?>
		<?php echo $form->textField($model,'extensions'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chem_straightening'); ?>
		<?php echo $form->textField($model,'chem_straightening'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brazil_blow'); ?>
		<?php echo $form->textField($model,'brazil_blow'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hair_up'); ?>
		<?php echo $form->textField($model,'hair_up'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'about'); ?>
		<?php echo $form->textArea($model,'about',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'why_hairdressing'); ?>
		<?php echo $form->textArea($model,'why_hairdressing',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'why_jakata'); ?>
		<?php echo $form->textArea($model,'why_jakata',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->