<?php
/* @var $this RecruitStylistController */
/* @var $model RecruitStylist */

$this->breadcrumbs=array(
	'Recruit Stylists'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RecruitStylist', 'url'=>array('index')),
	array('label'=>'Create RecruitStylist', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('recruit-stylist-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Recruit Stylists</h1>

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
	'id'=>'recruit-stylist-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'person_id',
		'salon_id',
		'date',
		'current_emp',
		'current_emp_des',
		/*
		'qual_school',
		'qual_non_hair',
		'adex1',
		'adex2',
		'adex3',
		'adex4',
		'adex5',
		'adex6',
		'experience',
		'current_position',
		'client_base',
		'qual_hair',
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
		'why_us',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
