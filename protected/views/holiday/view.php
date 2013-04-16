<?php
/* @var $this HolidayController */
/* @var $model Holiday */
?>
<div class="detail holiday">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model, 
	'cssFile'=>'false',
	'attributes'=>array(
		array(
			'name'=>'Staff'.':',
			'value'=>$model->staff->first_name . ' ' . $model->staff->last_name,
			),
		array(
			'name'=>'Day\'s'.':',
			'value'=>$model->hourConverter(),
			),
		array(
			'name'=>'prebooked'.':',
			'value'=>$model->getPrebookedText(),
			),
		array(
			'name'=>'From'.':',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->request_date_from,"full",""),		
			),
		array(
			'name'=>'To'.':',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->request_date_to,"full",""),
			),
		array(
			'name'=>'approved'.':',
			'value'=>$model->getApprovedText(),
			),
		
		array(
			'name'=>'Requested'.':',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->requested_on_date,"full",""),
			),
	),
)); ?>

</div> <!--holiday-->

<div id="approve" class="form holiday">
<?php echo $this->renderPartial('_approval', array('model'=>$model)); ?>
</div> <!--#approve-->