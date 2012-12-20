<?php
/* @var $this HolidayController */
/* @var $model Holiday */

$this->breadcrumbs=array(
	'Holidays'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'View Your Holidays', 'url'=>array('staff_holiday_list')),
	
);
?>

<h1>Book Your Holiday</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>