<?php
/* @var $this SickController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="sickPage">

<div class="pageHead sick">

<?php $this->widget('Admin_sickWidget'); ?>

<?php $this->widget('Admin_sickMenu'); ?>

</div> <!--.pageHead sick-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'cssFile'=>'false',
	'itemView'=>'_view',
)); ?>

</div>