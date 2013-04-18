<?php
/* @var $this HolidayController */
/* @var $model Holiday */

$this->breadcrumbs=array(
	'Holidays'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Holiday', 'url'=>array('staff_holiday_list')),
	array('label'=>'Create Holiday', 'url'=>array('staff_create')),
);

?>
<div class="detail holiday">
<div class="detailCode <?php if (CHtml::encode($model->approved) == 1) {
	echo 'unapproved'; } elseif (CHtml::encode($model->approved) == 2) {
		echo 'approved'; } else {
			echo 'pending';
		}
?>"></div>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model, 'cssFile'=>'false',
	'attributes'=>array(
		array(
			'name'=>'Days'.':',
			'value'=>$model->hourConverter(),
			),
		array(
			'name'=>'from'.':',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->request_date_from,"full",""),		
			),
		array(
			'name'=>'to'.':',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->request_date_to,"full",""),
			),
		array(
			'name'=>'approved'.':',
			'value'=>$model->getApprovedText(),
			),
			'saturday'
		),
)); ?>

		
		
</div> <!--#holiday-->

<?php echo CHtml::link('<p class="pageLink">Back to the full list</p>', array('/holiday/staff_holiday')); ?>