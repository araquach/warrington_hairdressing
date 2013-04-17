
<?php
/* @var $this FeedbackController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="feedbackPage">

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_staff_view',
	'sortableAttributes'=>array('stylist_id')
)); ?>
</div> <!--feedbackPage-->