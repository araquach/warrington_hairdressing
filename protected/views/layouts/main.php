<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/management_system.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mobile.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	
	
	<?php //enable for Google Analytics - enter account number and domain
	/*
	$this->widget('ext.widgets.googleAnalytics.EGoogleAnalyticsWidget',
			array('account'=>'**-*******-*','domainName'=>'template.com'));
	*/?>
	
	<script src="scripts/modernizr.js "type="text/javascript"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<header>
		<div id="logo"><?php echo CHtml::link('<h1>Salon Manager</h1>', array('/home/index')); ?></div>
	</header>

	<?php /*echo CHtml::link('<div class="menuBox small" id="lieu">
		<h2>Lieu Hours</h2>
		<p>2 owed</p>
	</div>', array('/lieu/staff_lieu')); */?>
	
	
	<?php echo $content; ?>
	
	<div class="group"></div>

	<footer>
		<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Home', 'url'=>array('/home/index')),
					array('label'=>'Admin', 'url'=>array('/home/admin_index'), 'visible'=>isset(Yii::app()->user->role) && (Yii::app()->user->role==="admin")),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			)); ?>
	</footer>
	

</div><!-- page -->

</body>
</html>
