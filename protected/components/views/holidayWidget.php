<<<<<<< HEAD
<?php 

	echo '<ul class="info"><li class="hidden">Holiday Entitlement: ' .$entitlement . ' days</li>
	<li class="hidden">Total Approved: ' . $total . ' days</li>
	<li>Remaining Holidays: ' . $remaining . ' days</li></ul>' 
	
?>	
=======
<?php echo CHtml::link('<div class="menuBox wide holiday" id="holiday">
	<h2>Holidays</h2>
	<p>' . $remaining . '<br>' . $total . ' remaining </p>
</div>', array('/holiday/staff_holiday')); ?>	
>>>>>>> jxmx
