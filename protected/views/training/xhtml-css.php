<?php $this->pageTitle = 'pressEnter | Capacitación en XHTML/CSS'; ?>
<div class="article">
	<div class="header">
		<h2>Curso de XHTML y CSS</h2>
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
		<h3>Temario del curso</h3>
		<ul>
			<li>Estructura básica de una página web</li>
			<li>Introducción a XHTML</li>
			<li>Diferencias entre HTML y XHTML</li>
			<li>Usando correctamente los elementos HTML</li>
			<li>Validación de código</li>
			<li>Introducción a CSS</li>
			<li>Sintáxis de CSS</li>
			<li>Seleccionado elementos por clase y por ID</li>
			<li>Modelo de caja en diferentes navegadores</li>
			<li>"Diseñando" para Internet Explorer</li>
			<li>Diferencias entre elementos en bloque y elementos en línea</li>
			<li>Orden de la cascada y especificidad</li>
			<li>Propiedades de texto</li>
			<li>Técnicas para fondos</li>
			<li>Bordes</li>
			<li>Elementos flotantes</li>
			<li>Posición relativa y absoluta</li>
			<li>Diseñando listas</li>
			<li>TIPS para un uso correcto de CSS</li>
			<li>Validación de código CSS</li>
			<li>Técnicas avanzadas</li>
			<li>CSS 3 y el futuro</li>
		</ul>
	</div>
	<div class="audience">
		<h3>A quién está dirigido?</h3>
		<p>Diseñadores y desarrolladores web.</p>
	</div>
	<div class="prerequisites">
		<h3>Pre requisitos</h3>
		<p>Este curso no requiere de ningún conocimiento previo en los temas tratados.</p>
	</div>
	<div class="footer"></div>
</div>
<?php echo $this->renderPartial('instructors/luciano_baraglia/_xhtml_css'); ?>
<hr />
