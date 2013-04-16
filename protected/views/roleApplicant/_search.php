<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'stylist_id'); ?>
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
		<?php echo $form->textField($model,'postcode',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>30,'maxlength'=>30)); ?>
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
		<?php echo $form->label($model,'qualifications'); ?>
		<?php echo $form->textField($model,'qualifications'); ?>
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
		<?php echo $form->textArea($model,'why_jakata',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->