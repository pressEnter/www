<?php $this->pageTitle = 'Pressenter | Cooperativa de Software Libre'; ?>
<div class="highlight" id="highlight-alba">
	<div id="highlight-message"><span>Destacado!</span></div>
    <div class="info-wrapper">
        <h2><?php echo CHtml::link('Proyecto ALBA', array('projects/details', 'item' => 'alba')); ?></h2>
        <h3>Sistema Libre de Gestión Educativa</h3>
        <div class="check-list">
			<ul>
				<li>Gestión de alumnos</li>
				<li>Control de asistencias</li>
				<li>Notas</li>
				<li>Administración de secciones</li>
				<li>Múltiples establecimientos</li>
			</ul>
        </div>
    </div>
    <div class="image-wrapper">
        <?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/pizarron-533x335.jpg'); ?>
        <p>El Proyecto Alba, es un proyecto de desarrollo de Software para la realización de un <strong>“Sistema Informático Abierto de Gestión Unificada para Unidades Educacionales”</strong>, que brindará una herramienta realizada en <strong>software libre</strong>, para el trabajo cotidiano en estas unidades. Por su tipo de licenciamiento bajo la <strong>GNU/GPL</strong>, el sistema permitirá una reutilización y actualización constante, como así también la posibilidad de aprovechamiento de módulos ya realizados por otros emprendedores (siempre que sean compatibles con esta licencia).</p>
    </div>
    <div class="gallery carousel" id="highlihght-alba-gallery">
		<?php $images_url = Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/'; ?>
		<ul>
			<li>
				<a href="<?php echo $images_url. 'inicio.jpg'; ?>">
					<img src="<?php echo $images_url . 'thumbs/inicio.jpg'; ?>" alt="Pantalla de inicio" title="Pantalla de inicio" />
				</a>        
			</li>
			<li>
				<a href="<?php echo $images_url. 'admin-cuentas.jpg'; ?>">
					<img src="<?php echo $images_url . 'thumbs/admin-cuentas.jpg'; ?>" alt="Administración de cuentas" title="Administración de cuentas" />
				</a>        
			</li>
			<li>
				<a href="<?php echo $images_url. 'admin-horarios.jpg'; ?>">
					<img src="<?php echo $images_url . 'thumbs/admin-horarios.jpg'; ?>" alt="Administración de horarios" title="Administración de horarios" />
				</a>        
			</li>
			<li>
				<a href="<?php echo $images_url. 'datos-alumno.jpg'; ?>">
					<img src="<?php echo $images_url . 'thumbs/datos-alumno.jpg'; ?>" alt="Datos del alumno" title="Datos del alumno" />
				</a>        
			</li>
			<li>
				<a href="<?php echo $images_url. 'entrada-legajo-pedagogico.jpg'; ?>">
					<img src="<?php echo $images_url . 'thumbs/entrada-legajo-pedagogico.jpg'; ?>" alt="Legajo pedagógico" title="Legajo pedagógico" />
				</a>        
			</li>
			<li>
				<a href="<?php echo $images_url. 'horarios-division.jpg'; ?>">
					<img src="<?php echo $images_url . 'thumbs/horarios-division.jpg'; ?>" alt="Horarios en la división" title="Horarios en la división" />
				</a>        
			</li>
			<li>
				<a href="<?php echo $images_url. 'locaciones.jpg'; ?>">
					<img src="<?php echo $images_url . 'thumbs/locaciones.jpg'; ?>" alt="Locaciones" title="Locaciones" />
				</a>        
			</li>
			<li>
				<a href="<?php echo $images_url. 'materias.jpg'; ?>">
					<img src="<?php echo $images_url . 'thumbs/materias.jpg'; ?>" alt="Materias" title="Materias" />
				</a>        
			</li>
			<li>
				<a href="<?php echo $images_url. 'notas-boletin.jpg'; ?>">
					<img src="<?php echo $images_url . 'thumbs/notas-boletin.jpg'; ?>" alt="Entrada de notas" title="Entrada de notas" />
				</a>        
			</li>
		</ul>
        <hr />
    </div>
</div>
<div id="services">
    <!--<h3>Servicios</h3>-->
    <div id="services-wrapper">
        <div class="service-detail" id="service-development">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/eleganticons-config.png'); ?>
            <h4>Desarrollo</h4>
            <p>Brindamos soluciones de software ajustándonos a sus necesidades funcionales y técnicas, creando nuevos aplicativos o personalizando software preexistente.</p>
			<p>Nos especializamos en la construcción de <strong><?php echo CHtml::link('aplicaciones web', array('services/details', 'item' => 'web-development')); ?></strong>, <strong>de escritorio</strong> y <strong><?php echo CHtml::link('actividades Sugar', array('services/details', 'item' => 'sugar-activities')); ?></strong>.</p>
			<p>El uso de <strong>tecnologías libres</strong> y metodologías estandarizadas, sumado a nuestro equipo altamente capacitado y comprometido, nos permite garantizar la calidad del software que desarrollamos.</p>
        </div>
        <div class="service-detail" id="service-training">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/eleganticons-questions.png'); ?>
            <h4>Capacitación</h4>
            <p>Dictamos <strong>cursos abiertos</strong>, así como capacitaciones y entrenamiento a equipos en: desarrollo con herramientas <strong>open source</strong>, metodologías ágiles, uso de aplicativos, <strong>redes</strong> y <strong><?php echo CHtml::link('administración de servidores', array('training/details', 'item' => 'gnu-linux')); ?></strong>.</p>
			<p>Los cursos tienen una modalidad práctica y están enfocados a que los asistentes puedan utilizar los conocimientos adquiridos para abordar problemáticas de la vida real de manera inmediata.</p>
        </div>
        <div class="service-detail" id="service-support">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/eleganticons-piechart.png'); ?>
            <h4>Soporte</h4>
            <p>Proveemos servicios de <strong>mantenimiento de equipo técnico para empresas</strong>, puesta en marcha de oficinas y centros de cómputos, <strong>instalación y configuración de servidores</strong>, <strong>redes</strong>, <strong>VPN</strong> y soluciones <strong>VoIP</strong>.</p>
			<p>Entendemos que la tecnología es una herramienta fundamental para las empresas de hoy en día, por eso nuestro equipo se esfuerza en dar una rápida respuesta ante los problemas de IT de nuestros clientes, ofreciendo un <strong><?php echo CHtml::link('servicio de monitoreo 24x7', array('services/details', 'item' => 'tech-support')); ?></strong>.</p>
        </div>
    </div> <!-- services-wrapper -->
</div>
<div id="news-updates">
    <div id="news">
        <h3>Noticias</h3>
        
        <?php $this->widget('Posts', array(
            'minimal' => true,
            'limit' => 2,
            'showSocialLinks' => false,
            //'category' =>  PostCategory::TYPE_NEWS,
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
    <ul class="first">
        <li><?php echo CHtml::image($technologies_url.'python.png', 'Python', array('title' => 'Python')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'django.png', 'Django', array('title' => 'Django')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'olpc.png', 'OLPC', array('title' => 'OLPC')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'apache.png', 'Apache', array('title' => 'Apache')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'gnu.png', 'GNU', array('title' => 'GNU')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'linux.png', 'Linux', array('title' => 'Linux')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'mysql.png', 'Mysql', array('title' => 'Mysql')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'postgresql.png', 'PostgreSQL', array('title' => 'PostgreSQL')); ?></li>
     </ul>
     <ul>
        <li><?php echo CHtml::image($technologies_url.'php.png', 'PHP', array('title' => 'PHP')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'yii.png', 'YII framework', array('title' => 'YII framework')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'symfony.png', 'Symfony framework', array('title' => 'Symfony framework')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'drupal.png', 'Drupal', array('title' => 'Drupal')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'joomla.png', 'Joomla', array('title' => 'Joomla')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'wordpress.png', 'Wordpress', array('title' => 'Wordpress')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'jquery.png', 'jQuery', array('title' => 'jQuery')); ?></li>
        <li><?php echo CHtml::image($technologies_url.'moodle.png', 'jQuery', array('title' => 'Moodle')); ?></li>
        <li class="last">&nbsp;</li>
    </ul>
    <hr />
</div>
<script type='text/javascript'>
    <?php $lightbox_url = Yii::app()->theme->baseUrl . '/js/jquery-lightbox-0.5/'; ?>
    $(document).ready(function(){ 
        $("div.gallery a").lightBox({
            imageLoading:           '<?php echo $lightbox_url; ?>images/lightbox-ico-loading.gif',      // (string) Path and the name of the loading icon
            imageBtnPrev:           '<?php echo $lightbox_url; ?>images/lightbox-btn-prev.gif',         // (string) Path and the name of the prev button image
            imageBtnNext:           '<?php echo $lightbox_url; ?>images/lightbox-btn-next.gif',         // (string) Path and the name of the next button image
            imageBtnClose:          '<?php echo $lightbox_url; ?>images/lightbox-btn-close.gif',        // (string) Path and the name of the close btn
            imageBlank:             '<?php echo $lightbox_url; ?>images/lightbox-blank.gif',            // (string) Path and the name of a blank image (one pixel)
            txtImage:               'Imagen',   // (string) Specify text "Image"
            txtOf:                  'de',       // (string) Specify text "of"
        });
        $("div#highlihght-alba-gallery ul").bxSlider({
			auto: true,
			pause: 3000,
			autoDelay: 1000,
			autoControls: false,
			autoHover: true,
			visible: 1,
			controls: false,
			pager: true,
			pagerType: 'full',
			pagerLocation: 'top',
			pagerActiveClass: 'pager-active',
			//captions: true
			easing: 'easeOutCubic'
		});
    }); 
</script>
