<?php
/* @var $this RecruitApplicantController */
/* @var $model RecruitApplicant */

$this->breadcrumbs=array(
	'Recruit Applicants'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RecruitApplicant', 'url'=>array('index')),
	array('label'=>'Manage RecruitApplicant', 'url'=>array('admin')),
);
?>

<h1>Create RecruitApplicant</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>