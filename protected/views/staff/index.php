<?php
/* @var $this StaffController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="staffPage">

<div class="pageHead staff">

<?php $this->widget('StaffWidget'); ?>

<?php $this->widget('StaffMenu'); ?>

</div> <!--.pageHead staff-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>  <!--staffPage-->