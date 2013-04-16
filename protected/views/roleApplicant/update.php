
<div id="application">
<?php
$this->breadcrumbs=array(
	'Stylists'=>array('index'),
	$model->first_name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Applicants', 'url'=>array('index')),
	array('label'=>'View Applicant', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Applicants', 'url'=>array('admin')),
);
?>

<h1>Update Applicant <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div> <!--application-->