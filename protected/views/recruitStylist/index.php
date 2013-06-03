<?php
/* @var $this RecruitStylistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recruit Stylists',
);

$this->menu=array(
	array('label'=>'Create RecruitStylist', 'url'=>array('create')),
	array('label'=>'Manage RecruitStylist', 'url'=>array('admin')),
);
?>

<h1>Recruit Stylists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
