<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h2>Administration Index</h2>

<p>This is the page for management administration</p>

<div id="adminmenu">
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Holidays', 'url'=>array('/holiday/index')),
			array('label'=>'Lieu Hours', 'url'=>array('/lieu/index')),
			array('label'=>'Add Staff', 'url'=>array('/staff/create')),
			
			
		),
	)); ?>
</div><!-- adminmenu -->