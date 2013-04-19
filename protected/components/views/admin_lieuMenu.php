<!--admin lieu Menu-->

<nav>
<ul>
<li><?php echo CHtml::link('Book a Holiday', array('staff_create')); ?></li>
<li><?php echo CHtml::link('Upcoming Holidays', array('staff_upcoming')); ?></li>
<li><?php echo CHtml::link('Awaiting Approval', array('staff_approval')); ?></li>
<li><?php echo CHtml::link('Denied Holidays', array('staff_denied')); ?></li>
<li><?php echo CHtml::link('All Holidays', array('staff_holiday')); ?></li>
</ul>
</nav>