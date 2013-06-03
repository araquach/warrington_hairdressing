<?php
/* @var $this RecruitStylistController */
/* @var $model RecruitStylist */

$this->breadcrumbs=array(
	'Recruit Stylists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RecruitStylist', 'url'=>array('index')),
	array('label'=>'Manage RecruitStylist', 'url'=>array('admin')),
);
?>

<h1>Create RecruitStylist</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>