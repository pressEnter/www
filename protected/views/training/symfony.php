<?php $this->pageTitle = 'pressEnter | Capacitación en Symfony Framework'; ?>
<div class="article">
	<div class="header">
		<h1>Symfony Framework</h1>
	</div>
	<div class="figure">
		<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/symfony-logo-100x100.png', 'Symfony logo', array()); ?>
	</div>
	<div class="body">
		<p>Symfony es un framework hiper-completo, una librería de clases cohesivas escrita en PHP.</p>
		<p>Provee una arquitectura, componentes y herramientas para que los desarrolladores puedan escribir aplicaciones complejas en segundos.</p>
		<p>En el curso se aprende a desarrollar y mantener aplicaciones "correctamente" y a gran escala, así como el concepto de MVC, el corazón de todo framework.</p>
	</div>
	<div class="syllabus">
		<h2>Temario del curso</h2>
		<ul>
			<li>Installing symfony</li>
			<li>From flat file to MVC project</li>
			<li>Templating with symfony</li>
			<li>Configuration</li>
			<li>Object Relational Abstraction</li>
			<li>Working environment</li>
			<li>Routing and HTTP protocol</li>
			<li>Admin generator</li>
			<li>Internationalization and localization</li>
			<li>The cache</li>
			<li>Tests</li>
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
<?php echo $this->renderPartial('instructors/_miguel_garcia'); ?>
<hr />
