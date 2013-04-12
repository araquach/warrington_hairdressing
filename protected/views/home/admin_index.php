<?php
/* @var $this HomeController */
?>

<div id="staffPage" class="group">

<?php echo CHtml::link('<div class="menuBox wide holiday" id="holiday">
	<h2>Holidays</h2>
</div>', array('/holiday/index')); ?>		

<?php echo CHtml::link('<div class="menuBox small lieu" id="lieu">
	<h2>Lieu Hours</h2>
</div>', array('/lieu/index')); ?>

<?php echo CHtml::link('<div class="menuBox small sick" id="sick">
	<h2>Sick</h2>
</div>', array('/sick/index')); ?>

</div> <!--#staffPage-->
