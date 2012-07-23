<?php $this->pageTitle = 'pressEnter | Proyecto Alba - Sistema Libre de Gestión Educativa'; ?>
<?php $this->metaDescription = 'El Proyecto ALBA es un Sistema Informático para Escuelas. Su licencia GNU/GPL permitirá una reutilización y actualización constante, como así también la posibilidad de aprovechamiento de módulos ya realizados por otros desarrolladores.'; ?>
<div class="article" id="alba-project">
	<div class="hgroup">
		<h2>Proyecto Alba</h2>
		<h3>Sistema Libre de Gestión Educativa</h3>
	</div>				
	
	<div class="body">
		<p>El Proyecto ALBA, es un proyecto de desarrollo de Software para la realización de un <strong>“Sistema Informático para Escuelas”</strong>, que brinda una herramienta realizada en <strong>software libre</strong>, para el trabajo cotidiano en estas unidades. Por su tipo de licenciamiento bajo la <strong>GNU/GPL</strong>, el sistema permitirá una reutilización y actualización constante, como así también la posibilidad de aprovechamiento de módulos ya realizados por otros desarrolladores.</p>
		<p>Pensado para nuestras propias instituciones educativas a partir de información relevada mediante entrevistas a responsables del sector, el software propuesto contempla un conjunto de módulos que pueden clasificarse en:</p>
		<ul>
			<li>Gestión de las Unidades Educacionales (establecimientos, ciclos, calendarios, etc.)</li>
			<li>Gestión de Alumnos (Legajos, Notas, Asistencias, etc.)</li>
			<li>Gestión de Docentes (Legajos, horarios, etc.)</li>
			<li>Informes</li>
		</ul>
		
		<h3>Objetivos generales del proyecto</h3>
		<p>Producir un Sistema Abierto de Gestión Unificada para Unidades Educacionales, posible de ser modificado a las necesidades de la unidad, e implementado por diferentes Pymes de la Ciudad, dependiendo de la demanda del sector.</p>
		<p>Generar nuevos emprendedores o Pymes para cumplir con la demanda de implementaciones y customización del producto para diferentes clientes (situación posible por contar con el Código Fuente).</p>
		<p>Implementar, de manera transparente y documentada, el resultado del desarrollo en unidades educativas de la Ciudad de Bs.As., como resultado del apoyo de las entidades intervinientes en el proyecto, que actúen como casos ejemplares de réplica. (Esto a su vez, hará posible la formación sobre nuevas tecnologías y la apropiación de éstas, en el ámbito de las unidades educacionales).</p>
		<p>Impulsar la creación en la comunidad educativa, de una red participativa orientada a resolver situaciones comunes en la utilización del software y provocar las mejoras poniéndolas a disposición gracias al licenciamiento libre a través de la GPL.</p>
		
	</div> <!-- BODY -->
	
	<div class="gallery">
		<h3>Capturas de pantalla</h3>
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
	</div> <!-- GALLERY -->
	
	<div class="footer">
		<h3>Información extra</h3>
		<p>Descargá el código en <a href="https://github.com/proyectoalba/alba" target="_blank">Proyecto Alba en Github</a>.</p>
		<p>Para más información visitá la <a href="http://proyectoalba.com.ar" target="_blank">página oficial del Proyecto Alba</a> y la <a href="http://dev.pressenter.com.ar/alba" target="_blank">wiki del proyecto</a>.</p>
	</div>
</div> <!-- ARTICLE -->

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
}); 
</script>
