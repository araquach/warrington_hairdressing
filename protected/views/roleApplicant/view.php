<div id="recruitBlank">

<?php

$this->menu=array(
	array('label'=>'List Applicants', 'url'=>array('index')),
	array('label'=>'Update Applicant', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Applicant', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Applicants', 'url'=>array('admin')),
);
?>

<h1>View Applicant #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'date',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->date,"medium",""),
			),
		'first_name',
		'second_name',
		'address1',
		'address2',
		'address3',
		'postcode',
		'email',
		'phone',
		'mobile',
		
		array(
			'name'=>'current_emp',
			'value'=>CHtml::encode($model->getEmploymentText())
			),
		
		'current_emp_des', 
		array(
			'name'=>'school_qual',
			'value'=>CHtml::encode($model->getQualSchoolText())
			),
		
		'qual_non_hair',
		
		array(
			'name'=>'adex_1',
			'type'=>'boolean'
			),
		array(
			'name'=>'adex_2',
			'type'=>'boolean'
			),
		array
			('name'=>'adex_3',
			'type'=>'boolean'
			),
		array(
			'name'=>'adex_4',
			'type'=>'boolean'
			),
		array(
			'name'=>'adex_5',
			'type'=>'boolean'
			),
		array(
			'name'=>'adex_6',
			'type'=>'boolean'
			),
	
		array(
			'name'=>'experience', 
			'value'=>CHtml::encode($model->getExperianceText())
			),
		array(
			'name'=>'position', 
			'value'=>CHtml::encode($model->getPositionText())
			),
		array(
			'name'=>'client_base', 
			'value'=>CHtml::encode($model->getClientBaseText())
			),
		array(
			'name'=>'qualifications', 
			'value'=>CHtml::encode($model->getQualificationText())
			),
			
		'cutting_skills',
		'colour_knowledge',
		'colour_skills',
		'men',
		'extensions_weave',
		'extensions_other',
		'chem_straighten',
		'braz_blow',
		'hair_up',
		'awards',
		'about_you',
		'why_hairdressing',
		'why_us',
		
	),
)); ?>

</div> <!--recruitBlank-->

