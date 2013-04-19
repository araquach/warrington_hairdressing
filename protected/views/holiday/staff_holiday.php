<?php
/* @var $this HolidayController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="holidayPage">

<div class="pageHead holiday">

<?php $this->widget('HolidayWidget'); ?>

<?php $this->widget('HolidayMenu'); ?>

</div> <!--.pageHead holiday-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_staff_view',
	'pager'=>array('cssFile'=>false),
)); ?>

</div> <!--holidayPage-->