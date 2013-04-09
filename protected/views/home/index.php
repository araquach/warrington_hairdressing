<?php
/* @var $this HomeController */
?>

<div id="staffPage" class="group">

<div class="menuBox wide holiday" id="holiday">
<?php echo CHtml::link('<h2>Holidays</h2>', array('/holiday/staff_holiday')); ?>
<?php $this->widget('HolidayWidget'); ?>
</div>

<div class="menuBox small lieu" id="lieu">
<?php echo CHtml::link('<h2>Lieu Hours</h2>', array('/lieu/staff_lieu')); ?>
<?php $this->widget('LieuWidget'); ?>
</div>


<!--to put inside links-->


<?php $this->widget('SickWidget'); ?>

<?php $this->widget('ProductWidget'); ?>

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
