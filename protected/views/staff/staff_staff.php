<?php
/* @var $this StaffController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="staffPage">

<div class="pageHead staff">

<?php $this->widget('Admin_staffWidget'); ?>

<?php $this->widget('Admin_staffMenu'); ?>

</div> <!--.pageHead staff-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>  <!--staffPage-->