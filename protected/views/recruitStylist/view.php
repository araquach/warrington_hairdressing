<?php
/* @var $this RecruitStylistController */
/* @var $model RecruitStylist */

$this->breadcrumbs=array(
	'Recruit Stylists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RecruitStylist', 'url'=>array('index')),
	array('label'=>'Create RecruitStylist', 'url'=>array('create')),
	array('label'=>'Update RecruitStylist', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RecruitStylist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RecruitStylist', 'url'=>array('admin')),
);
?>

<h1>View RecruitStylist #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'applicant_id',
		'current_emp',
		'current_emp_des',
		'qual_school',
		'qual_non_hair',
		'adex1',
		'adex2',
		'adex3',
		'adex4',
		'adex5',
		'adex6',
		'experience',
		'current_position',
		'client_base',
		'qual_hair',
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
