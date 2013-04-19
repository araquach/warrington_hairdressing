<!--Admin Sick Menu-->


<?php  if (Yii::app()->user->role==="admin"):?>
<nav>
<ul>
<li><?php echo CHtml::link('Sick Days', array('staff_sick')); ?></li>
<li><?php echo CHtml::link('Add Sick Day', array('create')); ?></li>
</ul>
</nav>

<?php else: ?>

<nav>
<ul>

</ul>
</nav>

<?php endif ?>