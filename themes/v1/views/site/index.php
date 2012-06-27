<div class="highlight" id="highlight-alba">
	<div class="info-wrapper">
		<h2>Proyecto ALBA</h2>
		<h3>Sistema Libre de Gestión Educativa</h3>
		<p>Sed elit felis, ornare in eleifend et, gravida ut risus. Vestibulum dictum egestas quam eu faucibus. Vestibulum ante dui, hendrerit vel cursus id, fringilla at ligula. Donec interdum vehicula tempus. Maecenas faucibus volutpat risus vitae blandit. Proin ut urna vitae nisl dignissim mattis. Proin sed enim ac turpis ultricies gravida sit amet at urna.</p>
	</div>
	<div class="image-wrapper">
		<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/pizarron-533x335.jpg'); ?>
		<p>El Proyecto Alba, es un proyecto de desarrollo de Software para la realización de un <strong>“Sistema Informático Abierto de Gestión Unificada para Unidades Educacionales”</strong>, que brindará una herramienta realizada en <strong>software libre</strong>, para el trabajo cotidiano en estas unidades. Por su tipo de licenciamiento bajo la <strong>GNU/GPL</strong>, el sistema permitirá una reutilización y actualización constante, como así también la posibilidad de aprovechamiento de módulos ya realizados por otros emprendedores (siempre que sean compatibles con esta licencia).</p>
	</div>
	<div class="gallery">
		<a href="<?php echo Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/entrada-legajo-pedagogico.jpg'; ?>">
			<img src="<?php echo Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/entrada-legajo-pedagogico-thumb.jpg'; ?>" alt="Legajo pedagógico" title="Legajo pedagógico" />
		</a>		
		<a href="<?php echo Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/notas-boletin.jpg'; ?>">
			<img src="<?php echo Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/notas-boletin-thumb.jpg'; ?>" alt="Boletín de notas" title="Boletín de notas" />
		</a>
		<hr />
	</div>
	<div class="read-more">
		<?php echo CHtml::link('<span>Leer más</span>', '#'); ?>
	</div>
</div>
<div id="services">
	<!--<h3>Servicios</h3>-->
	<div id="services-wrapper">
		<div class="service-detail" id="service-development">
			<?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/eleganticons-config.png'); ?>
			<h4>Desarrollo</h4>
			<p>Curabitur porttitor elit at sem dapibus placerat. Maecenas lacinia, enim at adipiscing egestas, enim lectus ornare arcu, posuere elementum quam diam at dolor. Nullam eu quam non arcu mollis commodo eu id nisi. Mauris nec quam at massa ultrices semper. Mauris cursus volutpat magna, in eleifend augue vulputate eu. Suspendisse tristique odio vitae lorem posuere iaculis. Donec dapibus rutrum lacinia.</p>
		</div>
		<div class="service-detail" id="service-training">
			<?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/eleganticons-questions.png'); ?>
			<h4>Capacitación</h4>
			<p>Curabitur porttitor elit at sem dapibus placerat. Maecenas lacinia, enim at adipiscing egestas, enim lectus ornare arcu, posuere elementum quam diam at dolor. Nullam eu quam non arcu mollis commodo eu id nisi. Mauris nec quam at massa ultrices semper. Mauris cursus volutpat magna, in eleifend augue vulputate eu. Suspendisse tristique odio vitae lorem posuere iaculis. Donec dapibus rutrum lacinia.</p>
		</div>
		<div class="service-detail" id="service-support">
			<?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/eleganticons-piechart.png'); ?>
			<h4>Soporte</h4>
			<p>Curabitur porttitor elit at sem dapibus placerat. Maecenas lacinia, enim at adipiscing egestas, enim lectus ornare arcu, posuere elementum quam diam at dolor. Nullam eu quam non arcu mollis commodo eu id nisi. Mauris nec quam at massa ultrices semper. Mauris cursus volutpat magna, in eleifend augue vulputate eu. Suspendisse tristique odio vitae lorem posuere iaculis. Donec dapibus rutrum lacinia.</p>
		</div>
	</div> <!-- services-wrapper -->
</div>
<div id="news-updates">
	<div id="news">
		<h3>Noticias</h3>
		
		<?php $this->widget('Posts', array(
			'minimal' => true,
			'limit' => 2,
			'showSocialLinks' => false
		)); ?>
	</div>
	<div id="updates">
		<h3>Actualizaciones</h3>
		<?php $this->renderPartial('application.views.partials._last_tweets'); ?>
	</div>
</div>
<div id="technologies">
	<?php $technologies_url = Yii::app()->request->getBaseUrl(true) . '/images/technologies/150x93/'; ?>
	<h3>Tecnologías <span>preferidas</span></h3>
	<ul>
		<li><?php echo CHtml::image($technologies_url.'apache.png', 'Apache', array('title' => 'Apache')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'django.png', 'Django', array('title' => 'Django')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'drupal.png', 'Drupal', array('title' => 'Drupal')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'gnu.png', 'GNU', array('title' => 'GNU')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'joomla.png', 'Joomla', array('title' => 'Joomla')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'jquery.png', 'jQuery', array('title' => 'jQuery')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'linux.png', 'Linux', array('title' => 'Linux')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'mysql.png', 'Mysql', array('title' => 'Mysql')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'olpc.png', 'OLPC', array('title' => 'OLPC')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'php.png', 'PHP', array('title' => 'PHP')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'postgresql.png', 'PostgreSQL', array('title' => 'PostgreSQL')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'python.png', 'Python', array('title' => 'Python')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'symfony.png', 'Symfony framework', array('title' => 'Symfony framework')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'wordpress.png', 'Wordpress', array('title' => 'Wordpress')); ?></li>
		<li><?php echo CHtml::image($technologies_url.'yii.png', 'YII framework', array('title' => 'YII framework')); ?></li>
		<li class="last">&nbsp;</li>
	</ul>
	<hr />
</div>
<script type='text/javascript'>
	<?php $lightbox_url = Yii::app()->theme->baseUrl . '/js/jquery-lightbox-0.5/'; ?>
	$(document).ready(function(){ 
		$("div.gallery a").lightBox({
			imageLoading:			'<?php echo $lightbox_url; ?>images/lightbox-ico-loading.gif',		// (string) Path and the name of the loading icon
			imageBtnPrev:			'<?php echo $lightbox_url; ?>images/lightbox-btn-prev.gif',			// (string) Path and the name of the prev button image
			imageBtnNext:			'<?php echo $lightbox_url; ?>images/lightbox-btn-next.gif',			// (string) Path and the name of the next button image
			imageBtnClose:			'<?php echo $lightbox_url; ?>images/lightbox-btn-close.gif',		// (string) Path and the name of the close btn
			imageBlank:				'<?php echo $lightbox_url; ?>images/lightbox-blank.gif',			// (string) Path and the name of a blank image (one pixel)
			txtImage:				'Imagen',	// (string) Specify text "Image"
			txtOf:					'de',		// (string) Specify text "of"
		}); 
	}); 
</script>
