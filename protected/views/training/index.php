<?php $this->pageTitle = 'pressEnter | Capacitación'; ?>
<div class="section">
	<h1>Capacitación</h1>
	<p>Brindamos capacitación profesional en temáticas de desarrollo de sistemas y coaching de proyectos, entre otros.</p>
	<p>Nuestros entrenamientos están dirigidos al nivel técnico para los equipos de trabajo de su empresa.</p>
	<h3>Actualmente ofrecemos capacitación en:</h3>

	<div class="section" id="training-items">

		<div class="article">
			<div class="header">
				<h2><?php echo CHtml::link('Symfony Framework', 'training/symfony'); ?></h2>
			</div>
			<div class="figure">
				<?php echo CHtml::link(
					CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/symfony-logo-100x100.png', 'Symfony logo', array()),
					'training/symfony',
					array('title' => 'Curso de Symfony')
				); ?>
			</div>
			<div class="body">
				<p>Symfony es un framework completo para la construcciones de aplicativos y sitios web en <strong>PHP 5</strong>.</p>
				<p>Provee una librería de clases cohesivas, componentes y herramientas que permiten a los desarrolladores crear aplicaciones complejas de forma rápida, enfocándose en las problemáticas propias del negocio.</p>
				<p>En el curso se enseña cómo desarrollar y mantener aplicaciones, así como los conceptos e ideas detrás del framework (MVC, routing, ORM, etc).</p>
			</div>
			<div class="footer"></div>
		</div>
		<hr />

		<div class="article">
			<div class="header">
				<h2><?php echo CHtml::link('Drupal CMS', 'training/drupal'); ?></h2>
			</div>
			<div class="figure">
				<?php echo CHtml::link(
					CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/drupal-logo-100x100.png', 'Drupal logo', array()),
					'training/drupal',
					array('title' => 'Curso de Drupal')
				); ?>
			</div>
			<div class="body">
				<p>Drupal es una plataforma de administración de contenidos utilizada en millones de sitios web y aplicaciones.</p>
				<p>Está desarrollado, utilizado, y apoyado por una activa y diversa comunidad de gente alrededor de todo el mundo.</p>
				<p>Aprendé a crear un sitio web utilizando Drupal, utilizando módulos de la comunidad, creando los propios y diseñando un theme totalmente desde cero.</p>
			</div>
			<div class="footer"></div>
		</div>
		<hr />

		<div class="article">
			<div class="header">
				<h2><?php echo CHtml::link('Python / Django', 'training/python-django'); ?></h2>
			</div>
			<div class="figure">
				<?php echo CHtml::link(
					CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/django-logo-100x100.png', 'Python/Django logos', array()),
					'training/python-django',
					array('title' => 'Curso de Python/Django')
				); ?>
			</div>
			<div class="body">
				<p>Django es un framework de alto nivel hecho en <strong>Python</strong> que alienta un desarrollo limpio y un diseño pragmático.</p>
				<p>Este framework se enfoca en automatizar las tareas lo más posible y así evitar código repetitivo y propenso al error.</p>
				<p>Dictado por miembros activos de la comunidad de Python, el curso propone aprender a utilizar tanto el framework como el lenguaje en el que está basado.</p>
			</div>
			<div class="footer"></div>
		</div>
		<hr />

		<div class="article">
			<div class="header">
				<h2><?php echo CHtml::link('XHTML/CSS', 'training/xhtml-css'); ?></h2>
			</div>
			<div class="figure">
				<?php echo CHtml::link(
					CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/css-logo-100x100.png', 'CSS logo', array()),
					'training/xhtml-css',
					array('title' => 'Curso de XHTML/CSS')
				); ?>
			</div>
			<div class="body">
				<p>XHTML y CSS son la herramienta para separar el contenido de la presentación de un sitio web.</p>
				<p>El principio es hacer una web más semántica, o sea, que el código tenga sentido respecto al contenido que muestra, y la importancia de tener separadas estas dos partes se refleja principalmente en los motores de búsqueda.</p>
				<p>La capacitación comienza con una introducción a XHTML, cómo escribir código válido y liviano para terminar con maquetación avanzada con CSS.</p>
			</div>
			<div class="footer"></div>
		</div>
		<hr />

		<div class="article last">
			<div class="header">
				<h2><?php echo CHtml::link('GNU/Linux', 'training/gnu-linux'); ?></h2>
			</div>
			<div class="figure">
				<?php echo CHtml::link(
					CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/linux-logo-100x100.png', 'CSS logo', array()),
					'training/gnu-linux',
					array('title' => 'Curso de GNU/Linux')
				); ?>
			</div>
			<div class="body">
                <p>Actualmente <strong>GNU/Linux</strong> es un sistema operativo muy utilizado en las empresas para brindar servicios, como así también en computadoras personales y dispositivos portátiles.</p>
            <p>Proponemos capacitarte para que puedas dominar éste sistema, conociendo su arquitectura, funcionamiento interno, configuración y servicios, para poder adaptarlo a tus necesides, acompañado por un profesional experto en el tema.</p>
			</div>
			<div class="footer"></div>
		</div>
		<hr />

</div>
