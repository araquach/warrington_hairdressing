
<?php
/* @var $this FeedbackController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="feedbackBlank">
<?php 
$this->breadcrumbs=array(
	'Feedback Inputs',
);

$this->menu=array(
	array('label'=>'Create Feedback', 'url'=>array('create')),
	array('label'=>'Manage Feedback', 'url'=>array('admin')),
);
?>

<h1>Feedback Inputs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('stylist_id')
)); ?>
</div> <!--feedbackBlank-->