<?php
/* @var $this SiteController */
?>

<div id="staffPage" class="group">

<?php echo CHtml::link('<div class="menuBox wide" id="holiday">
	<h2>Holidays</h2>
	<p>4 remaining</p>
</div>', array('/holiday/staff_holiday')); ?>		


<?php echo CHtml::link('<div class="menuBox small" id="lieu">
	<h2>Lieu Hours</h2>
	<p>2 owed</p>
</div>', array('/lieu/staff_lieu')); ?>

<!--to put inside links-->

<div class="menuBox small" id="sick">			
	<h2>Sick Days</h2>
	<p>10</p>
</div>

<div class="menuBox wide" id="products">			
	<h2>Products</h2>
	<p>&pound;134</p>
</div>

<div class="menuBox small" id="blank">			
	<h2>Something Else</h2>
	<p>12</p>
</div>

<div class="menuBox small" id="messages">			
	<h2>Messages</h2>
	<p>2 new</p>
</div>

<div class="menuBox small" id="figures">			
	<h2>Figures</h2>
	<p>&pound;3,200</p>
</div>

<div class="menuBox small" id="user">			
	<h2>Your Info</h2>
</div>

<div class="menuBox small" id="users">			
	<h2>Users</h2>
	<p>12</p>
</div>

</div> <!--#staffPage-->
