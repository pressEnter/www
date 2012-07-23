<?php $this->pageTitle = 'pressEnter | Curso de Symfony Framework'; ?>
<?php $this->metaDescription = 'Curso de Symfony Framework en Argentina. En el curso se enseña cómo desarrollar y mantener aplicaciones, así como los conceptos e ideas detrás del framework.'; ?>
<div class="article">
	<div class="header">
		<h2>Curso de Symfony Framework</h2>
	</div>
	<div class="figure">
		<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/symfony-logo-100x100.png', 'Symfony logo', array()); ?>
	</div>
	<div class="body">
				<p>Symfony es un framework completo para la construcciones de aplicativos y sitios web en <strong>PHP 5</strong>.</p>
				<p>Provee una librería de clases cohesivas, componentes y herramientas que permiten a los desarrolladores crear aplicaciones complejas de forma rápida, enfocándose en las problemáticas propias del negocio.</p>
				<p>En el curso se enseña cómo desarrollar y mantener aplicaciones, así como los conceptos e ideas detrás del framework (MVC, routing, ORM, etc).</p>
	</div>
	<div class="syllabus">
		<h3>Temario del curso</h3>
		<ul>
			<li>Arquitectura de aplicaciones web flat vs MVC</li>
			<li>Instalación de symfony y setup inicial de un proyecto</li>
			<li>MVC en symfony y routing</li>
			<li>ORM: definición de esquema de datos y acceso a datos</li>
			<li>Forms, widgets y validadores</li>
			<li>Generación automática de ABMs y su personalización</li>
			<li>Seguridad: manejo de usuario y permisos</li>
			<li>Internationalización</li>
			<li>Cache</li>
			<li>Testing unitario y funcional</li>
		</ul>
	</div>
	<div class="audience">
		<h3>A quién está dirigido?</h3>
		<p>Desarrolladores web - programadores</p>
	</div>
	<div class="prerequisites">
		<h3>Pre requisitos</h3>
		<p>Conocimientos básicos de PHP</p>
	</div>
	<div class="footer"></div>
</div>
<?php echo $this->renderPartial('instructors/miguel_garcia/_symfony'); ?>
<hr />
