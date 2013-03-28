<?php
/* @var $this HolidayController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="holidayPage">

<h1>Manage Your Holidays</h1>

<nav id="holidayNav">
<?php echo CHtml::link('Book a Holiday', array('staff_create')); ?>		
<?php echo CHtml::link('View Your Holidays', array('staff_holiday_list')); ?>
</nav>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_staff_view',
)); ?>

</div> <!--holidayPage-->




