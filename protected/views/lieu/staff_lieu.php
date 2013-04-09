<?php
/* @var $this HolidayController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="lieuPage">

<div class="pageHead lieu">

<?php $this->widget('LieuWidget'); ?>

<nav>
<h2><?php echo CHtml::link('Add/Take Lieu Hours', array('staff_create')); ?></h2>
</nav>

</div>  <!--pageHead lieu-->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_staff_view',
)); ?>

</div> <!--#lieuPage-->

