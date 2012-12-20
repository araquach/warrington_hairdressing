<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h2>Staff Index</h2>

<p>This is the home page for individual staff</p>

<div id="staffmenu">
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Manage Your Holidays', 'url'=>array('/holiday/staff_holiday')),
			array('label'=>'Manage Your Lieu Hours', 'url'=>array('/lieu/staff_lieu')),
			
			
		),
	)); ?>
</div><!-- staffmenu -->


