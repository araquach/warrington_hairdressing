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

<?php echo $this->renderPartial('_staff_form', array('model'=>$model)); ?>