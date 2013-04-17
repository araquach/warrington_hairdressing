<?php
/* @var $this SickController */
/* @var $dataProvider CActiveDataProvider */
?>


<div id="sickPage">

<div class="pageHead sick">

<?php $this->widget('SickWidget'); ?>

<?php $this->widget('SickMenu'); ?>

</div> <!--.pageHead sick-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_staff_view',
	'pager'=>array('cssFile'=>false),
)); ?>



</div> <!--sickPage-->
