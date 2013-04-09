<?php
/* @var $this HolidayController */
/* @var $model Holiday */
?>

<nav>
<?php echo CHtml::link('Back to Full List', array('staff_holiday')); ?>
</nav>
<?php echo $this->renderPartial('_staff_form', array('model'=>$model)); ?>
