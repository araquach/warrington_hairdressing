<?php
/* @var $this HolidayController */
/* @var $model Holiday */

$this->menu=array(
	array('label'=>'Request a holiday', 'url'=>array('staff_create')),
);

?>

<h1>Your Holidays</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_staff_view',
)); ?>