<?php
/* @var $this SiteController */
?>

<div id="staffPage" class="group">

<?php echo CHtml::link('<div class="menuBox wide holiday" id="holiday">
	<h2>Holidays</h2>
	<p>4 remaining</p>
</div>', array('/holiday/staff_holiday')); ?>		


<?php echo CHtml::link('<div class="menuBox small lieu" id="lieu">
	<h2>Lieu Hours</h2>
	<p>2 owed</p>
</div>', array('/lieu/staff_lieu')); ?>

<!--to put inside links-->

<div class="menuBox small sick" id="sick">			
	<h2>Sick Days</h2>
	<p>10</p>
</div>

<div class="menuBox wide products" id="products">			
	<h2>Products</h2>
	<p>&pound;134</p>
</div>

<div class="menuBox small blank" id="blank">			
	<h2>Something Else</h2>
	<p>12</p>
</div>

<div class="menuBox small messages" id="messages">			
	<h2>Messages</h2>
	<p>2 new</p>
</div>

<div class="menuBox small figures" id="figures">			
	<h2>Figures</h2>
	<p>&pound;3,200</p>
</div>

<div class="menuBox small users" id="users">			
	<h2>Users</h2>
	<p>12</p>
</div>

<div class="menuBox wide user" id="user">			
	<h2>Your Info</h2>
</div>

</div> <!--#staffPage-->
