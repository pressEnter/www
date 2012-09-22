<?php $this->pageTitle = 'pressEnter | Capacitación en Proyecto ALBA'; ?>
<?php $this->metaDescription = 'Capacitación en Proyecto ALBA.'; ?>
<div class="article">
	<div class="header">
		<h2>Capacitación en Proyecto ALBA</h2>
	</div>
	<div class="figure">
		<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/training/proyecto-alba-logo-100x100.png', 'Proyecto ALBA logo', array()); ?>
	</div>
	<div class="body">
		<p>El Proyecto ALBA, es un proyecto de desarrollo de Software para la realización de un “Sistema Informático para Escuelas”, que brinda una herramienta realizada en software libre, para el trabajo cotidiano en estas unidades.</p>
		<h3 style="clear: both; padding-top: 10px;">El software  contempla un conjunto de módulos que pueden clasificarse en:</h3>
		<ul>
			<li>Gestión de las Unidades Educacionales (establecimientos, ciclos, calendarios, etc.)</li>
			<li>Gestión de Alumnos (Legajos, Notas, Asistencias, etc.)</li>
			<li>Gestión de Docentes (Legajos, horarios, etc.)</li>
			<li>Informes</li>
		</ul>
	</div>
	<div class="syllabus">
		<h3>Temario del curso</h3>
		<ul>
			<li>Uso y configuración del Sistema ALBA</li>
			<li>Configuración inicial de datos (Administración general)</li>
			<li>Configuración de roles y usuarios (Seguridad)</li>
			<li>Administración de Cuentas, Alumnos y Docentes</li>
			<li>Herramientas de gestión escolar</li>
			<li>Administración de horarios y espacios</li>
			<li>Uso de las consultas y creación de nuevas</li>
			<li>Biblioteca de contenidos</li>
		</ul>         
	</div>
	<div class="audience">
		<h3>A quién está dirigido?</h3>
		<p>El curso está dirigido a personas involucradas en la administración de uno o varios establecimientos.</p>
	</div>
	<div class="prerequisites">
		<h3>Pre requisitos</h3>
		<p>Conocimientos básicos de PC</p>
	</div>
	<div class="footer"></div>
</div>
<?php echo $this->renderPartial('instructors/jordi_lopez_amat/_proyecto_alba'); ?>
<hr />
 

        
