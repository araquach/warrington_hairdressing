
<div id="recruitBlank">

<?php

$this->menu=array(
	array('label'=>'List Apprentice', 'url'=>array('index')),
	array('label'=>'Update Apprentice', 'url'=>array('update', 'id'=>$model->apprentice_id)),
	array('label'=>'Delete Apprentice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->apprentice_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Apprentice', 'url'=>array('admin')),
);
?>

<h1>View Apprentice #<?php echo $model->apprentice_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'apprentice_id',
		'date',
		'first_name',
		'second_name',
		'age',
		'address1',
		'address2',
		'address3',
		'postcode',
		'email',
		'phone',
		'mobile', 
		array('name'=>'current_postion', 
			'value'=>CHtml::encode($model->getPositionText())
			),
		array('name'=>'in_salon', 
			'value'=>CHtml::encode($model->getInSalonText())
			),
		'salon_name',
		array('name'=>'qualification_school', 
			'value'=>CHtml::encode($model->getQualSchoolText())
			),
		array('name'=>'qualification_hair', 
			'value'=>CHtml::encode($model->getQualHairText())
			),
		'cutting',
		'styling',
		'colouring',
		'men',
		'extensions',
		'chem_straightening',
		'brazil_blow',
		'hair_up',
		'about',
		'why_hairdressing',
		'why_jakata',
	),
)); ?>

</div> <!-- #recruitBlank -->


