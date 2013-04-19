
<?php
/* @var $this FeedbackController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="feedbackPage">

<div class="pageHead feedback">

<?php $this->widget('Admin_feedbackWidget'); ?>

<?php $this->widget('Admin_feedbackMenu'); ?>

</div> <!--.pageHead feedback-->


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'sortableAttributes'=>array('stylist_id')
)); ?>
</div> <!--feedbackPage-->
