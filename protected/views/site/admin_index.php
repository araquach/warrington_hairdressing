<?php
/* @var $this SiteController */
?>

<div id="staffPage" class="group">

<?php echo CHtml::link('<div class="menuBox wide holiday" id="holiday">
	<h2>Holidays</h2>
	<p>4 remaining</p>
</div>', array('/holiday/index')); ?>		


<?php echo CHtml::link('<div class="menuBox small lieu" id="lieu">
	<h2>Lieu Hours</h2>
	<p>2 owed</p>
</div>', array('/lieu/index')); ?>

</div> <!--#staffPage-->
