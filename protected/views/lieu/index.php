<?php
/* @var $this LieuController */
/* @var $dataProvider CActiveDataProvider */
?>

<div id="lieuPage">

<div class="pageHead lieu">

<?php $this->widget('Admin_lieuWidget'); ?>

<?php $this->widget('Admin_lieuMenu'); ?>

<<<<<<< HEAD
</div> <!--.pageHead.lieu-->
=======
</div> <!--.pageHead lieu-->
>>>>>>> adjusted the holiday model for adnin bookings

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array('cssFile'=>false),
)); ?>

<<<<<<< HEAD
</div> <!--#lieuPage-->
=======
</div> <!--lieuPage-->
>>>>>>> adjusted the holiday model for adnin bookings
