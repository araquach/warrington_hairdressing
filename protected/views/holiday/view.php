<?php
/* @var $this HolidayController */
/* @var $model Holiday */

$this->breadcrumbs=array(
	'Holidays'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Holiday', 'url'=>array('index')),
	array('label'=>'Create Holiday', 'url'=>array('create')),
	array('label'=>'Update Holiday', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Holiday', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Holiday', 'url'=>array('admin')),
);
?>

<h1>View Your Holiday #<?php echo $model->id; ?></h1>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'Staff Member',
			'value'=>$model->staff->first_name . ' ' . $model->staff->last_name,
			),
		array(
			'name'=>'Day\'s Requested',
			'value'=>$model->hourConverter(),
			),
		array(
			'name'=>'prebooked',
			'value'=>$model->getPrebookedText(),
			),
		array(
			'name'=>'request_date_from',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->request_date_from,"full",""),		
			),
		array(
			'name'=>'request_date_to',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->request_date_to,"full",""),
			),
		array(
			'name'=>'approved',
			'value'=>$model->getApprovedText(),
			),
		
		array(
			'name'=>'requested_on_date',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->requested_on_date,"full",""),
			),
	),
)); ?>


<?php echo $this->renderPartial('_approval', array('model'=>$model)); ?>
