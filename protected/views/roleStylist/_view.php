<div class="view">

	<ul>

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stylist_id), array('view', 'id'=>$data->stylist_id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
		<?php echo CHtml::encode(Yii::app()->dateFormatter->formatDateTime($data->date, "medium","")); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('second_name')); ?>:</b>
	<?php echo CHtml::encode($data->second_name); ?>
	<br />

	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('address1')); ?>:</b>
	<?php echo CHtml::encode($data->address1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address2')); ?>:</b>
	<?php echo CHtml::encode($data->address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address3')); ?>:</b>
	<?php echo CHtml::encode($data->address3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postcode')); ?>:</b>
	<?php echo CHtml::encode($data->postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('experience')); ?>:</b>
	<?php echo CHtml::encode($data->experience); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_position')); ?>:</b>
	<?php echo CHtml::encode($data->current_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_base')); ?>:</b>
	<?php echo CHtml::encode($data->client_base); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualifications')); ?>:</b>
	<?php echo CHtml::encode($data->qualifications); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cutting_skills')); ?>:</b>
	<?php echo CHtml::encode($data->cutting_skills); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colour_knowledge')); ?>:</b>
	<?php echo CHtml::encode($data->colour_knowledge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colour_skills')); ?>:</b>
	<?php echo CHtml::encode($data->colour_skills); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('men')); ?>:</b>
	<?php echo CHtml::encode($data->men); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extensions_weave')); ?>:</b>
	<?php echo CHtml::encode($data->extensions_weave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extensions_other')); ?>:</b>
	<?php echo CHtml::encode($data->extensions_other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chem_straighten')); ?>:</b>
	<?php echo CHtml::encode($data->chem_straighten); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('braz_blow')); ?>:</b>
	<?php echo CHtml::encode($data->braz_blow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hair_up')); ?>:</b>
	<?php echo CHtml::encode($data->hair_up); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('awards')); ?>:</b>
	<?php echo CHtml::encode($data->awards); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about_you')); ?>:</b>
	<?php echo CHtml::encode($data->about_you); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('why_hairdressing')); ?>:</b>
	<?php echo CHtml::encode($data->why_hairdressing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('why_us')); ?>:</b>
	<?php echo CHtml::encode($data->why_jakata); ?>
	<br />
	
	</ul>
	
	*/ ?>

</div>