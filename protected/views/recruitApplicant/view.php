<?php
/* @var $this RecruitApplicantController */
/* @var $model RecruitApplicant */

$this->breadcrumbs=array(
	'Recruit Applicants'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List RecruitApplicant', 'url'=>array('index')),
	array('label'=>'Create RecruitApplicant', 'url'=>array('create')),
	array('label'=>'Update RecruitApplicant', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RecruitApplicant', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RecruitApplicant', 'url'=>array('admin')),
);
?>

<h1>View RecruitApplicant #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'person_id',
		'salon_id',
		'role_id',
		'date',
	),
)); ?>
