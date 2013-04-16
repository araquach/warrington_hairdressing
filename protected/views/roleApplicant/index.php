
<div id="recruitBlank">
<?php
$this->breadcrumbs=array(
	'Stylists',
);

$this->menu=array(
	array('label'=>'Manage Stylist', 'url'=>array('admin')),
);
?>

<h1>Stylists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div> <!--recruitBlank-->
