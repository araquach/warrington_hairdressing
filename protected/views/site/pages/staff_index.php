<?php
/* @var $this SiteController */
?>


<div id="staffmenu">
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Manage Your Holidays', 'url'=>array('/holiday/staff_holiday')),
			array('label'=>'Manage Your Lieu Hours', 'url'=>array('/lieu/staff_lieu')),
		),
	)); ?>
</div><!-- staffmenu -->


