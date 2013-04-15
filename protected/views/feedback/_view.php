<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->date, "medium","")); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_first')); ?>:</b>
	<?php echo CHtml::encode($data->client_first); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_second')); ?>:</b>
	<?php echo CHtml::encode($data->client_second); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intro')); ?>:</b>
	<?php echo CHtml::encode($data->intro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consultation')); ?>:</b>
	<?php echo CHtml::encode($data->consultation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('styling_area')); ?>:</b>
	<?php echo CHtml::encode($data->styling_area); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('stylist_appearance')); ?>:</b>
	<?php echo CHtml::encode($data->stylist_appearance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prod_advice')); ?>:</b>
	<?php echo CHtml::encode($data->prod_advice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('styling_advice')); ?>:</b>
	<?php echo CHtml::encode($data->styling_advice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internal_marketing')); ?>:</b>
	<?php echo CHtml::encode($data->internal_marketing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value_for_money')); ?>:</b>
	<?php echo CHtml::encode($data->value_for_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('whole_experience')); ?>:</b>
	<?php echo CHtml::encode($data->whole_experience); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_result')); ?>:</b>
	<?php echo CHtml::encode($data->end_result); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('extra')); ?>:</b>
	<?php echo CHtml::encode($data->extra); ?>
	<br />
	
	*/  ?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('stylist_id')); ?>:</b>
	<?php echo CHtml::encode($data->FeedbackStylist->stylist); ?>
	<br />
	<b><?php echo CHtml::encode('Score'); ?>:</b>
	<?php echo CHtml::encode($data->score()); ?>

	

</div>