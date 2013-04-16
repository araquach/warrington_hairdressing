<div id="recruitAdmin">
<?php
$this->breadcrumbs=array(
	'Stylists'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Stylist', 'url'=>array('index')),
	array('label'=>'Create Stylist', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('stylist-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stylists</h1>

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
	'id'=>'stylist-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date',
		'first_name',
		'second_name',
		//'address1',
		//'address2',
		//'address3',
		'postcode',
		'email',
		/*'phone',
		'mobile',
		'current_emp', 
		'current_emp_des', 
		'school_qual', 
		'qual_non_hair', 
		'adex_stock', 
		'adex_manage', 
		'adex_train', 
		'adex_reception', 
		'adex_marketing', 
		'adex_cservice'
		'experience',
		'current_position',
		'client_base',
		'qualifications',
		'cutting_skills',
		'colour_knowledge',
		'colour_skills',
		'men',
		'extensions_weave',
		'extensions_other',
		'chem_straighten',
		'braz_blow',
		'hair_up',
		'awards',
		'about_you',
		'why_hairdressing',
		'why_jakata',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div> <!--recruitAdmin-->
