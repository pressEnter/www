<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?php echo $this->metaDescription; ?>" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/page-content.css" />
	<link rel="stylesheet" media="screen" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main-nav.css" />
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Overlock' />
	<link rel='alternate' type="application/rss+xml" href='<?php echo Yii::app()->createAbsoluteUrl('/'). '/news/rss'?>' title="pressEnter - Novedades"/>
	<link rel="image_src" href="<?php echo Yii::app()->request->getBaseUrl(true); ?>/images/logo-130x110.png?v=1" />

	<?php Yii::app()->clientScript->registerscriptFile(Yii::app()->theme->baseUrl . "/js/superfish-1.4.8/js/hoverIntent.js"); ?>
	<?php Yii::app()->clientScript->registerscriptFile(Yii::app()->theme->baseUrl . "/js/superfish-1.4.8/js/superfish.js"); ?>

	<?php Yii::app()->clientScript->registerscriptFile(Yii::app()->theme->baseUrl . "/js/jquery-ui-1.8.21/development-bundle/ui/minified/jquery.effects.core.min.js"); ?>
	<?php Yii::app()->clientScript->registerscriptFile(Yii::app()->theme->baseUrl . "/js/jquery-ui-1.8.21/development-bundle/ui/minified/jquery.effects.highlight.min.js"); ?> <!-- Flash messages -->

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
			$('div#messages div.success').animate({ backgroundColor: "#618F25" }, 3000);
			$('div#messages div.error').animate({ backgroundColor: "#AA0000" }, 3000);
		});
	</script>
	<div id="wrapper">
		<div class="section header" id="header">
			<h1><span><?php echo CHtml::encode(Yii::app()->name); ?></span></h1>
			<p id="subtitle"><span>Cooperativa de Software {Libre}</span></p>
			<div id="logo">
				<a href="<?php echo Yii::app()->request->getBaseUrl(true); ?>"><?php echo CHtml::image(Yii::app()->createAbsoluteUrl('/') . '/images/logo-200x55.png', 'pressEnter logo', array('title' => 'pressEnter logo')); ?></a>
			</div>

			<div id="social-links">
				<?php $images_dir = Yii::app()->theme->baseUrl ."/images"; ?>
				<ul>
					<li>
						<a href="https://twitter.com/#!/PressEnterComAr" target="_blank">
							<img src="<?php echo $images_dir; ?>/icons/twitter-bird-24x24.png" alt="Cuenta de Twitter de pressEnter" title="Cuenta de Twitter de pressEnter" />
						</a>
					</li>
					<li>
						<a href="http://www.facebook.com/pages/PressEnter-Cooperativa-de-desarrollo-de-Software-Libre/105554509534761" target="_blank">
							<img src="<?php echo $images_dir; ?>/icons/infocus-facebook-logo-square-24x24.png" alt="pressenter en Facebook" title="pressenter en Facebook" />
						</a>
					</li>
					<li>
						<a href="http://www.linkedin.com/company/2532858" target="_blank">
							<img src="<?php echo $images_dir; ?>/icons/infocus-linkedin-logo-square2-24x24.png" alt="Perfil de pressEnter en Linkedin" title="Perfil de pressEnter en Linkedin" />
						</a>
					</li>
					<li>
						<?php echo CHtml::link(
							CHtml::image($images_dir.'/icons/infocus-rss-cube-24x24.png', 'Noticias RSS', array('title' => 'Noticias RSS')),
							array('news/rss')
						);
						?>
					</li>
				</ul>
			</div> <!-- social-links -->

		</div><!-- header -->

		<div id="main-nav">
			<?php $this->renderPartial('webroot.themes.v1.views.partials._main_nav'); ?>
		</div><!-- main-nav -->

		<div id="content">
			<div id="inner-content">
			<?php $this->renderPartial('application.views.partials._flashes'); ?>
				<div id="page-content">
				<?php echo $content; ?>
				</div>
			</div>
		</div>

		<div class="section footer" id="footer">
			<div class="section" id="contact">
				<h2>Contacto</h2>
				<ul id="contact-details">
					<li><strong>Email</strong> <span>info@pressenter.com.ar</span></li>
					<li><strong>Teléfonos</strong> <span>+54 9 11 3475 1407 | +54 9 11 3499 1374</span></li>
					<li><strong>Dirección</strong> <span>Av. Belgrano 748 1° Of. 13 | CABA |  Argentina </span></li>
				</ul>
				<div id="map">
        <iframe width="278" height="208"
        src="http://www.openstreetmap.org/export/embed.html?bbox=-58.38105,-34.61484,-58.37406,-34.61113&amp;layer=osmarender&amp;marker=-34.61298,-58.37702"
        style="border: 1px solid black"></iframe>
        <br /><br />
        <small>
        <a target="_blank" href="http://www.openstreetmap.org/?lat=-34.612985&amp;lon=-58.377555&amp;zoom=17&amp;layers=M&amp;mlat=-34.61298&amp;mlon=-58.37702">Ver mapa m&aacute;s grande</a>
        </small>
        </div><!-- map -->
				<div id="site-contact-form-wrapper">
					<?php $this->renderPartial('webroot.themes.v1.views.partials._site_contact_form'); ?>
				</div>
			</div> <!-- contact -->
			<div class="nav" id="links">
				<?php $this->renderPartial('webroot.themes.v1.views.partials._links'); ?>
			</div><!-- links -->
			<hr />
			<div class="section" id="extra">
				<div id="copyleft">
					<p><strong>pressEnter &copy;</strong> <span>Cooperativa de Software Libre</span> <?php echo date('Y'); ?></p>
				</div>
				<div id="powered">
					<p>Gracefully developed with <?php echo CHtml::link('Yii Framework', 'http://yiiframework.com', array('target' => '_blank')); ?></p>
				</div>
				<div class="buttons">
					<a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/ar/" target="_blank"><?php echo Html::image('http://i.creativecommons.org/l/by-sa/2.5/ar/80x15.png',"Licencia Creative Commons", array('title'=>"Licencia Creative Commons", 'style'=>"border-width:0"))?></a>
					<a href="http://validator.w3.org/check?uri=referer" target="_blank"><?php echo Html::image('/PixelButton-valid-xhtml.gif', 'Valid XHTML 1.0 Transitional', array('title' => 'Valid XHTML 1.0 Transitional')); ?></a>
					<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3" target="_blank"><?php echo Html::image('PixelButton-valid-css.gif', 'Valid CSS', array('title' => 'Valid CSS')); ?></a>
				</div>
				<div id="technologies-copyright">
					<p id="icons-copyright">Icons by <a href="http://dryicons.com" target="_blank">Dryicons</a>, <a href="http://www.elegantthemes.com/" target="_blank">Nicholas Roach</a>, <a href="http://delacro.deviantart.com/" target="_blank">Delacro</a>, <a href="http://mysitemyway.com/" target="_blank">Mysitemyway</a> - </p>
					<p id="jquery-copyright">Effects: <a href="http://jquery.com" target="_blank">jQuery</a>, <a href="http://jquerytools.org" target="_blank">jQuerytools</a> &amp; <a href="http://ericmmartin.com/projects/simplemodal/" target="_blank">SimpleModal</a></p>
				</div>
			</div>
		</div><!-- footer -->

	</div><!-- wrapper -->
  <?php $this->renderPartial('webroot.themes.v1.views.partials._piwik');?>
  </body>
</html>
