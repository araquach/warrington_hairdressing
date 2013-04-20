<?php
/* @var $this HolidayController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="lieuPage">

<div class="pageHead lieu">

<?php $this->widget('LieuWidget'); ?>

<?php $this->widget('lieuMenu'); ?>

</div>  <!--pageHead lieu-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_staff_view',
)); ?>

</div> <!--#lieuPage-->

