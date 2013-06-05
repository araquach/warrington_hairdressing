<?php
/* @var $this LieuController */
/* @var $model Lieu */
?>
<div class="detail lieu">
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
			'name'=>'Staff Member',
			'value'=>$model->staff->person->getFullName(),
			),
		'lieu_hours',
		'description',
		array(
			'name'=>'date_regarding',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->date_regarding,"full",""),		
			),
		array(
			'name'=>'requested_on',
			'value'=>Yii::app()->dateFormatter->formatDateTime($model->requested_on,"full",""),		
			),
		array(
			'name'=>'approved',
			'value'=>$model->getApprovedText(),
			),
	),
)); ?>

</div>

<div id="approve" class="form lieu">
<?php echo $this->renderPartial('_approval', array('model'=>$model)); ?>
</div> <!--#approve-->



