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
				'name'=>'Lieu Hours'.':',
				'value'=>$model->lieu_hours,		
				),
			array(
				'name'=>'Description'.':',
				'value'=>$model->description,		
				),
			array(
				'name'=>'Date'.':',
				'value'=>Yii::app()->dateFormatter->formatDateTime($model->date_regarding,"full",""),		
				),
			array(
				'name'=>'Requested'.':',
				'value'=>Yii::app()->dateFormatter->formatDateTime($model->requested_on,"full",""),		
				),
			array(
				'name'=>'approved'.':',
				'value'=>$model->getApprovedText(),
				),
		),
	)); ?>
</div>

<?php echo CHtml::link('<p class="pageLink">Back to the full list</p>', array('/lieu/staff_lieu')); ?>