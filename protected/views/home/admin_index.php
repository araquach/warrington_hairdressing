<?php
/* @var $this HomeController */
?>

<div id="staffPage" class="group">

<div class="menuBox wide holiday" id="holiday">
<?php echo CHtml::link('<h2>Holidays</h2>', array('/holiday/index')); ?>
<?php $this->widget('Admin_holidayWidget'); ?>
</div>


<div class="menuBox small feedback" id="feedback">
<?php echo CHtml::link('<h2>Feedback</h2>', array('/feedback/index')); ?>
<?php $this->widget('Admin_feedbackWidget'); ?>
</div>


<div class="menuBox small lieu" id="lieu">
<?php echo CHtml::link('<h2>Lieu Hours</h2>', array('/lieu/index')); ?>
<?php $this->widget('Admin_lieuWidget'); ?>
</div>

<div class="menuBox small sick" id="sick">
<?php echo CHtml::link('<h2>Sick Days</h2>', array('/sick/index')); ?>
<?php $this->widget('Admin_sickWidget'); ?>
</div>


<div class="menuBox small messages" id="messages">
<?php echo CHtml::link('<h2>Messages</h2>', array('/messages/index')); ?>
<?php $this->widget('Admin_messageWidget'); ?>
</div>

<div class="menuBox small figures" id="figures">
<?php echo CHtml::link('<h2>Figures</h2>', array('/figures/index')); ?>
<?php $this->widget('Admin_figuresWidget'); ?>
</div>

<div class="menuBox small products" id="products">
<?php echo CHtml::link('<h2>Product Sales</h2>', array('/products/index')); ?>
<?php $this->widget('Admin_productWidget'); ?>
</div>

<div class="menuBox small users" id="users">
<?php echo CHtml::link('<h2>User</h2>', array('/user/index')); ?>
<?php $this->widget('Admin_userWidget'); ?>
</div>

</div> <!--#staffPage-->