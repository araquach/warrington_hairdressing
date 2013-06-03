<?php
/* @var $this RecruitApplicantController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recruit Applicants',
);

$this->menu=array(
	array('label'=>'Create RecruitApplicant', 'url'=>array('create')),
	array('label'=>'Manage RecruitApplicant', 'url'=>array('admin')),
);
?>

<h1>Recruit Applicants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
