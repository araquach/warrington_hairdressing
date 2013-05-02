<?php
/* @var $this HolidayController */
/* @var $model Holiday */
/* @var $form CActiveForm */
?>

<div class="form holiday">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'holiday-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php if (Yii::app()->detectMobileBrowser->showMobile): ?> 
	<div class="row">
		<?php echo $form->labelEx($model,'request_date_from'); ?>
		<?php echo $form->dateField($model,'request_date_from'); ?>
		<?php echo $form->error($model,'request_date_from'); ?>
	</div>	
			
		<?php else: ?>
	
	<!--<div class="row">
		<?php echo $form->labelEx($model,'request_date_from'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model'=>$model, 'attribute'=>'request_date_from',
		    'options'=>array(
		        'dateFormat'=>'yy-mm-dd',
		        'yearRange'=>'-3:+5',
		        'changeYear'=>'true',
		        'changeMonth'=>'true',
		    ),
		)); ?>
		<?php echo $form->error($model,'request_date_from'); ?>
	</div>-->
	
	<div class="row">
			<?php echo $form->labelEx($model,'request_date_from'); ?>
			<?php echo $form->hiddenField($model,'request_date_from'); ?>
			<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			    'name'=>'requestDateFrom',
			    'options'=>array(
			    	'dateFormat'=>'dd/mm/yy',
					'altField'=>'#'.CHtml::activeId($model, "request_date_from"),
					'altFormat'=>'yy-mm-dd',			
			    ),	
			    'value'=>$model->request_date_from ? $model->request_date_from:null,	   
			));
			?>
			<?php echo $form->error($model,'request_date_from'); ?>
		</div>
	
	
		<?php endif; ?>
		
	<?php if (Yii::app()->detectMobileBrowser->showMobile): ?> 
	<div class="row">
		<?php echo $form->labelEx($model,'request_date_to'); ?>
		<?php echo $form->dateField($model,'request_date_to'); ?>
		<?php echo $form->error($model,'request_date_to'); ?>
	</div>
		
		<?php else: ?>
		
		
	<div class="row">
			<?php echo $form->labelEx($model,'request_date_to'); ?>
			<?php echo $form->hiddenField($model,'request_date_to'); ?>
			<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			    'name'=>'requestDateTo',
			    'options'=>array(
			    	'dateFormat'=>'dd/mm/yy',
					'altField'=>'#'.CHtml::activeId($model, "request_date_to"),
					'altFormat'=>'yy-mm-dd',			
			    ),	
			    'value'=>$model->request_date_to ? $model->request_date_to:null,	   
			));
			?>
			<?php echo $form->error($model,'request_date_to'); ?>
		</div>
		
		<?php endif; ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'hours_requested'); ?>
		<?php echo $form->numberField($model,'hours_requested'); ?>
		<?php echo $form->error($model,'hours_requested'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'requested_on_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Book' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->