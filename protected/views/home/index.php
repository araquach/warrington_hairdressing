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

<div class="menuBox small sick" id="sick">
<?php echo CHtml::link('<h2>Sick Days</h2>', array('/lieu/staff_sick')); ?>
<?php $this->widget('SickWidget'); ?>
</div>

<div class="menuBox small messages" id="messages">
<?php echo CHtml::link('<h2>Messages</h2>', array('/lieu/staff_message')); ?>
<?php $this->widget('MessageWidget'); ?>
</div>

<div class="menuBox small figures" id="figures">
<?php echo CHtml::link('<h2>Figures</h2>', array('/lieu/staff_figures')); ?>
<?php $this->widget('FiguresWidget'); ?>
</div>

<div class="menuBox small products" id="products">
<?php echo CHtml::link('<h2>Product Sales</h2>', array('/lieu/staff_product')); ?>
<?php $this->widget('ProductWidget'); ?>
</div>

<div class="menuBox small users" id="users">
<?php echo CHtml::link('<h2>User</h2>', array('/lieu/staff_user')); ?>
<?php $this->widget('UserWidget'); ?>
</div>

</div> <!--#staffPage-->
