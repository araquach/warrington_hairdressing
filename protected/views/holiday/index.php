<?php
/* @var $this HolidayController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Holidays',
);

$this->menu=array(
	array('label'=>'Manage Holidays', 'url'=>array('admin')),
);
?>
<div id="holidayPage">

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div> <!--#holidayPage-->
