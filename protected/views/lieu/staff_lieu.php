<?php
/* @var $this HolidayController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="lieuPage">

<h2>Manage Your Lieu Hours</h2>

<nav id="lieuNav">
<?php echo CHtml::link('Add/Take Lieu Hours', array('staff_create')); ?>
</nav>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_staff_view',
)); ?>

</div> <!--#lieuPage-->

