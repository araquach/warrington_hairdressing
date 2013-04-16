
<div id="recruitBlank">
<?php
$this->breadcrumbs=array(
	'Applicants',
);

$this->menu=array(
	array('label'=>'Manage Applicants', 'url'=>array('admin')),
);
?>

<h1>Job Applicants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div> <!--recruitBlank-->
