<?php if($model->approved == 2):?>
<?php echo 'Hi ' . $model->staff->first_name . ', we\'re pleased to say your Lieu request has been approved'?>
<?php else: ?>
<?php echo 'Hi ' . $model->staff->first_name .', unfortunately your Lieu request has been denied'?>
<?php endif; ?>