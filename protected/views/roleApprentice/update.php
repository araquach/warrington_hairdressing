<div id="application">

<?php
$this->breadcrumbs=array(
	'Apprentices'=>array('index'),
	$model->first_name=>array('view','id'=>$model->apprentice_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Apprentice', 'url'=>array('index')),
	array('label'=>'Create Apprentice', 'url'=>array('create')),
	array('label'=>'View Apprentice', 'url'=>array('view', 'id'=>$model->apprentice_id)),
	array('label'=>'Manage Apprentice', 'url'=>array('admin')),
);
?>

<h1>Update Apprentice <?php echo $model->apprentice_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--application-->