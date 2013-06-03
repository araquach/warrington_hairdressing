<?php
/* @var $this RecruitApplicantController */
/* @var $model RecruitApplicant */

$this->breadcrumbs=array(
	'Recruit Applicants'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RecruitApplicant', 'url'=>array('index')),
	array('label'=>'Create RecruitApplicant', 'url'=>array('create')),
	array('label'=>'View RecruitApplicant', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RecruitApplicant', 'url'=>array('admin')),
);
?>

<h1>Update RecruitApplicant <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>