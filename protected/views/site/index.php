<?php
/* @var $this SiteController */
?>

<div id="staffPage" class="group">


<?php $this->widget('HolidayWidget'); ?>	

<?php $this->widget('LieuWidget'); ?>


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
