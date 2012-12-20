<?php
/* @var $this HolidayController */
/* @var $dataProvider CActiveDataProvider */
?>


<h1>Manage Your Holidays</h1>

<?php $this->menu=array(
	array('label'=>'Book Your Holiday', 'url'=>array('staff_create')),
	array('label'=>'View Your Holidays', 'url'=>array('staff_holiday_list')),
);
?>

