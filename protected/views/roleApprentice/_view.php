<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('apprentice_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->apprentice_id), array('view', 'id'=>$data->apprentice_id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('second_name')); ?>:</b>
	<?php echo CHtml::encode($data->second_name); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->age); ?>
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

	*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_position')); ?>:</b>
	<?php echo CHtml::encode($data->getPositionText()); ?>
	<br />
	
	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_salon')); ?>:</b>
	<?php echo CHtml::encode($data->in_salon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salon_name')); ?>:</b>
	<?php echo CHtml::encode($data->salon_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualification_school')); ?>:</b>
	<?php echo CHtml::encode($data->qualification_school); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qualification_hair')); ?>:</b>
	<?php echo CHtml::encode($data->qualification_hair); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cutting')); ?>:</b>
	<?php echo CHtml::encode($data->cutting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('styling')); ?>:</b>
	<?php echo CHtml::encode($data->styling); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colouring')); ?>:</b>
	<?php echo CHtml::encode($data->colouring); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('men')); ?>:</b>
	<?php echo CHtml::encode($data->men); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('extensions')); ?>:</b>
	<?php echo CHtml::encode($data->extensions); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chem_straightening')); ?>:</b>
	<?php echo CHtml::encode($data->chem_straightening); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brazil_blow')); ?>:</b>
	<?php echo CHtml::encode($data->brazil_blow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hair_up')); ?>:</b>
	<?php echo CHtml::encode($data->hair_up); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about')); ?>:</b>
	<?php echo CHtml::encode($data->about); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('why_hairdressing')); ?>:</b>
	<?php echo CHtml::encode($data->why_hairdressing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('why_jakata')); ?>:</b>
	<?php echo CHtml::encode($data->why_jakata); ?>
	<br />

	*/ ?>

</div>