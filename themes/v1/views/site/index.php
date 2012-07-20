<?php $this->pageTitle = 'pressEnter | Cooperativa de Software Libre'; ?>
<div class="section" id="intro">
	<h2>Introducción</h2>
</div>
<div class="section" id="services">
    <h2>Servicios</h2>
    <div id="services-wrapper">
        <div class="article" id="service-development">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/eleganticons-config.png'); ?>
            <h3>Desarrollo de Software</h3>
            <p>Brindamos soluciones de software ajustándonos a sus necesidades funcionales y técnicas, creando nuevos aplicativos o personalizando software preexistente.</p>
			<p>Nos especializamos en la construcción de <strong><?php echo CHtml::link('aplicaciones web', array('services/details', 'item' => 'web-development')); ?></strong>, <strong>de escritorio</strong> y <strong><?php echo CHtml::link('actividades Sugar', array('services/details', 'item' => 'sugar-activities')); ?></strong>.</p>
			<p>El uso de <strong>tecnologías libres</strong> y metodologías estandarizadas, sumado a nuestro equipo altamente capacitado y comprometido, nos permite garantizar la calidad del software que desarrollamos.</p>
        </div>
        <div class="article service-detail" id="service-training">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/eleganticons-questions.png'); ?>
            <h3>Capacitación</h3>
            <p>Dictamos capacitaciones y entrenamiento a equipos en: desarrollo con herramientas <strong>open source</strong>, frameworks como Django, Symfony, metodologías ágiles  y <strong><?php echo CHtml::link('administración de servidores', array('training/details', 'item' => 'gnu-linux')); ?></strong>.</p>
			<p>Los cursos tienen una modalidad práctica y están enfocados a que los asistentes puedan utilizar los conocimientos adquiridos para abordar problemáticas de la vida real de manera inmediata.</p>
        </div>
        <div class="article service-detail" id="service-support">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/images/icons/eleganticons-piechart.png'); ?>
            <h3>Soporte Técnico</h3>
            <p>Proveemos servicios de <strong>mantenimiento de equipo técnico para empresas</strong>, puesta en marcha de oficinas y centros de cómputos, <strong>instalación y configuración de servidores</strong>, <strong>NetWorking</strong>, <strong>VPN</strong> y soluciones <strong>VoIP</strong>.</p>
			<p>Entendemos que la tecnología es una herramienta fundamental para las empresas de hoy en día, por eso nuestro equipo se esfuerza en dar una rápida respuesta ante los problemas de IT de nuestros clientes, ofreciendo servicios a su medida.<strong><?php echo CHtml::link(' Ver en detalle', array('services/details', 'item' => 'tech-support')); ?></strong>.</p>
        </div>
        <hr />
    </div> <!-- services-wrapper -->
</div>
<?php $this->renderPartial('webroot.themes.v1.views.partials.highlights._alba'); ?>
<div class="section" id="news-updates">
    <div class="section" id="news">
        <h2>Noticias</h2>
        
        <?php $this->widget('Posts', array(
            'minimal' => true,
            'limit' => 2,
            'showSocialLinks' => false,
            'headerTag' => 'h3',
        )); ?>
    </div>
    <div class="section" id="updates">
        <h2>Actualizaciones</h2>
        <?php $this->renderPartial('application.views.partials._last_tweets'); ?>
    </div>
</div>
<div class="section gallery" id="technologies">
    <?php $technologies_url = Yii::app()->request->getBaseUrl(true) . '/images/technologies/150x93/'; ?>
    <h2>Tecnologías <span>preferidas</span></h2>
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
