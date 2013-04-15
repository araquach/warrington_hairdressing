<div id="recruitAdmin">

<?php
$this->breadcrumbs=array(
	'Apprentices'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Apprentice', 'url'=>array('index')),
	array('label'=>'Create Apprentice', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('apprentice-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Apprentices</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'apprentice-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'apprentice_id',
		'date',
		'first_name',
		'second_name',
		'age',
		//'address1',
		//'address2',
		//'address3',
		'postcode',
		'email',
		'phone',
		'mobile',
		/*'current_position',
		'in_salon',
		'salon_name',
		'qualification_school',
		'qualification_hair',
		'cutting',
		'styling',
		'colouring',
		'men',
		'extensions',
		'chem_straightening',
		'brazil_blow',
		'hair_up',
		'about',
		'why_hairdressing',
		'why_jakata',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div> <!--recruitAdmin-->
