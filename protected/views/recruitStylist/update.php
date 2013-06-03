<?php
/* @var $this RecruitStylistController */
/* @var $model RecruitStylist */

$this->breadcrumbs=array(
	'Recruit Stylists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RecruitStylist', 'url'=>array('index')),
	array('label'=>'Create RecruitStylist', 'url'=>array('create')),
	array('label'=>'View RecruitStylist', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RecruitStylist', 'url'=>array('admin')),
);
?>

<h1>Update RecruitStylist <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>