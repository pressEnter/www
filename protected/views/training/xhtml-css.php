<?php $this->pageTitle = 'Pressenter | Capacitación en XHTML/CSS'; ?>
<div class="article">
	<div class="header">
		<h1>XHTML/CSS</h1>
	</div>
	<div class="figure">
		<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/css-logo-100x100.png', 'CSS logo', array()); ?>
	</div>
	<div class="body">
		<p>XHTML y CSS son la herramienta para separar el contenido de la presentación de un sitio web.</p>
		<p>El principio es hacer una web más semántica, o sea, que el código tenga sentido respecto al contenido que muestra, y la importancia de tener separadas estas dos partes se refleja principalmente en los motores de búsqueda.</p>
		<p>La capacitación comienza con una introducción a XHTML, cómo escribir código válido y liviano para terminar con maquetación avanzada con CSS.</p>
	</div>
	<div class="syllabus">
		<h2>Temario del curso</h2>
		<br />
		https://training.tamu.edu/courseOutline.php?course=CSS
		<ul>
			<li>Introduction to Cascading Style Sheets (CSS)</li>
			<li>Designing with Style Sheets</li>
			<li>Style Sheet Syntax</li>
			<li>Class Selectors</li>
			<li>The DIV and SPAN Elements</li>
			<li>Linked (External) Style Sheets</li>
			<li>Cascading Order</li>
			<li>Text and Font Properties</li>
			<li>Applying Colors</li>
			<li>Background Techniques</li>
			<li>Formatting with the Box Model</li>
			<li>Borders</li>
			<li>Floating Elements</li>
			<li>Styling Lists</li>
			<li>Postioning Elements Absolutely and Relatively</li>
			<li>Layering Elements with the Z-Index Property</li>
			<li>Applying CSS Wisely</li>
			<li>Dynamically Linked Style Sheets</li>
			<li>Contextual Selectors</li>
			<li>Validating CSS</li>
			<li>The Future of CSS</li>
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
<?php echo $this->renderPartial('instructors/_luciano_baraglia'); ?>
<hr />
