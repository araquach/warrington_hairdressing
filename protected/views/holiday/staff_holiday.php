<?php
/* @var $this HolidayController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="holidayPage">

<nav id="holidayNav">
<?php echo CHtml::link('Book a Holiday', array('staff_create')); ?>
</nav>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_staff_view',
	'pager'=>array('cssFile'=>false),
)); ?>



</div> <!--holidayPage-->




