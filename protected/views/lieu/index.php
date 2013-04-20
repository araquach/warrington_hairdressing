<?php
/* @var $this LieuController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="lieuPage">

<div class="pageHead lieu">

<?php $this->widget('Admin_lieuWidget'); ?>

<?php $this->widget('Admin_lieuMenu'); ?>

</div> <!--.pageHead.lieu-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array('cssFile'=>false),
)); ?>


</div> <!--lieuPage-->
