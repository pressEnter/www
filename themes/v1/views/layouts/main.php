<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/inner-content.css" />
	<link rel="stylesheet" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main-nav.css" /> 
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Overlock" />
	
	<?php Yii::app()->clientScript->registerscriptFile(Yii::app()->theme->baseUrl . "/js/superfish-1.4.8/js/hoverIntent.js"); ?>
	<?php Yii::app()->clientScript->registerscriptFile(Yii::app()->theme->baseUrl . "/js/superfish-1.4.8/js/superfish.js"); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body id="<?php echo str_replace('/', '-', $this->getUniqueId()).'-'.$this->getAction()->getId(); ?>">
	<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").superfish({
				delay:       50,                               // one second delay on mouseout
				animation:   {opacity:'show', height:'show'},  // fade-in and slide-down animation
				speed:       'fast',                           // faster animation speed
				autoArrows:  false,                            // disable generation of arrow mark-up
				dropShadows: false                             // disable drop shadows
			}); 
		}); 
	</script>
<div id="wrapper">
	
	<div id="header">
		<h1>
			<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>">
				<span><?php echo CHtml::encode(Yii::app()->name); ?></span>
			</a>
		</h1>
		<h2><span>Cooperativa de Software {Libre}</span></h2>
		<div id="header-contact-info">
		</div>
	</div><!-- header -->
	
	<div id="main-nav">
		<?php $this->renderPartial('webroot.themes.v1.views.partials._main_nav'); ?>
	</div><!-- main-nav -->
	
	<div id="content">
		<div id="inner-content">
		<?php $this->renderPartial('application.views.partials._flashes'); ?>
		<?php echo $content; ?>
		</div>
	</div>
	
	<div id="footer">
		<div id="contact">
			<h3>Contacto</h3>
			<ul id="contact-details">
				<li><strong>Email</strong> <span>info@pressenter.com.ar</span></li>
				<li><strong>Teléfono</strong> <span>+54 9 11 3475 1407</span></li>
				<li><strong>Dirección</strong> <span>Belgrano 748 1ro Of. 13</span></li>
			</ul>
			<div id="map">
<!--
				<iframe width="280" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Avenida+Belgrano+748,+Ciudad+Aut%C3%B3noma+de+Buenos+Aires&amp;aq=0&amp;oq=Avenida+Belgrano+748,+Ciudad&amp;sll=-38.341656,-63.28125&amp;sspn=34.935993,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Av+Belgrano+748,+Monserrat,+Buenos+Aires&amp;t=m&amp;ll=-34.612796,-58.376799&amp;spn=0.014834,0.025663&amp;z=14&amp;output=embed"></iframe>
				<br />
-->
				<!--
				<small>
					<a href="https://maps.google.com.ar/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=Avenida+Belgrano+748,+Ciudad+Aut%C3%B3noma+de+Buenos+Aires&amp;aq=0&amp;oq=Avenida+Belgrano+748,+Ciudad&amp;sll=-38.341656,-63.28125&amp;sspn=34.935993,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Av+Belgrano+748,+Monserrat,+Buenos+Aires&amp;t=m&amp;ll=-34.612796,-58.376799&amp;spn=0.014834,0.025663&amp;z=14" style="color:#0000FF;text-align:left">Ver mapa más grande</a>
				</small>
				-->
			</div> <!-- map -->
			<div id="site-contact-form-wrapper">
				<?php $this->renderPartial('webroot.themes.v1.views.partials._site_contact_form'); ?>
			</div>
		</div> <!-- contact -->
		<div id="links">
				<?php $this->renderPartial('webroot.themes.v1.views.partials._links'); ?>
		</div><!-- links -->
		<hr />
		<div id="copyleft">
			<p><strong>pressEnter &copy;</strong> <span>Cooperativa de Software Libre</span> <?php echo date('Y'); ?> - <?php echo CHtml::link('Licencia', 'http://www.gnu.org/copyleft/gpl.html', array('target' => '_blank')); ?></p>
		</div>
		<div id="powered">
			<p>Gracefully developed with <?php echo CHtml::link('Yii Framework', 'http://yiiframework.com', array('target' => '_blank')); ?></p>
		</div>
	</div><!-- footer -->

</div><!-- wrapper -->

</body>
</html>
