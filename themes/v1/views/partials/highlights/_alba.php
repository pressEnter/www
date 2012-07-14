<div class="section article highlight" id="highlight-alba">
	<div id="highlight-message"><span>Destacado!</span></div>
    <div class="info-wrapper">
		<div class="hgroup">
			<h2><?php echo CHtml::link('Proyecto ALBA', array('projects/details', 'item' => 'alba')); ?></h2>
			<h3>Sistema Libre de Gestión Educativa</h3>
		</div>
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
        <?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/pizarron-535x340.jpg'); ?>
        <p>El Proyecto ALBA, es un sistema web para la gestión de establecimientos educativos, éste facilitará la organización y administración de la escuela.</br>
        Esta herramienta es <strong>Software Libre</strong>. Por su tipo de licenciamiento bajo la licencia <strong>GNU/GPL</strong>, el sistema permitirá una reutilización y actualización constante del sistema, como así también la posibilidad de aprovechamiento de módulos ya realizados por otros emprendedores.</p>
    </div>
	<div id="alba-gallery-wrapper">
		
		<div class="gallery" id="highlihght-alba-gallery">

			<!-- root element for the items -->
			<div class="items">
				<?php $images_url = Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/'; ?>
				<div>
					<a href="<?php echo $images_url. 'inicio.jpg'; ?>">
						<img src="<?php echo $images_url . 'thumbs/inicio.jpg'; ?>" alt="Pantalla de inicio" title="Pantalla de inicio" />
					</a>        
				</div>
				<div>
					<a href="<?php echo $images_url. 'admin-cuentas.jpg'; ?>">
						<img src="<?php echo $images_url . 'thumbs/admin-cuentas.jpg'; ?>" alt="Administración de cuentas" title="Administración de cuentas" />
					</a>        
				</div>
				<div>
					<a href="<?php echo $images_url. 'admin-horarios.jpg'; ?>">
						<img src="<?php echo $images_url . 'thumbs/admin-horarios.jpg'; ?>" alt="Administración de horarios" title="Administración de horarios" />
					</a>        
				</div>
				<div>
					<a href="<?php echo $images_url. 'datos-alumno.jpg'; ?>">
						<img src="<?php echo $images_url . 'thumbs/datos-alumno.jpg'; ?>" alt="Datos del alumno" title="Datos del alumno" />
					</a>        
				</div>
				<div>
					<a href="<?php echo $images_url. 'entrada-legajo-pedagogico.jpg'; ?>">
						<img src="<?php echo $images_url . 'thumbs/entrada-legajo-pedagogico.jpg'; ?>" alt="Legajo pedagógico" title="Legajo pedagógico" />
					</a>        
				</div>
				<div>
					<a href="<?php echo $images_url. 'horarios-division.jpg'; ?>">
						<img src="<?php echo $images_url . 'thumbs/horarios-division.jpg'; ?>" alt="Horarios en la división" title="Horarios en la división" />
					</a>        
				</div>
				<div>
					<a href="<?php echo $images_url. 'locaciones.jpg'; ?>">
						<img src="<?php echo $images_url . 'thumbs/locaciones.jpg'; ?>" alt="Locaciones" title="Locaciones" />
					</a>        
				</div>
				<div>
					<a href="<?php echo $images_url. 'materias.jpg'; ?>">
						<img src="<?php echo $images_url . 'thumbs/materias.jpg'; ?>" alt="Materias" title="Materias" />
					</a>        
				</div>
				<div>
					<a href="<?php echo $images_url. 'notas-boletin.jpg'; ?>">
						<img src="<?php echo $images_url . 'thumbs/notas-boletin.jpg'; ?>" alt="Entrada de notas" title="Entrada de notas" />
					</a>        
				</div>
				
			</div> <!-- items -->
			
		</div> <!-- highlihght-alba-gallery -->
		
		<div id="alba-gallery-nav"></div>
		
	</div> <!-- alba-gallery-wrapper -->
	
</div> <!-- article -->

<script type='text/javascript'>
    <?php $lightbox_url = Yii::app()->theme->baseUrl . '/js/jquery-lightbox-0.5/'; ?>
    $(document).ready(function(){ 
		$("#highlihght-alba-gallery").scrollable({
			circular: true
		}).autoscroll({
			autoplay: true
		}).navigator({
			navi: 'div#alba-gallery-nav'
		});
		//
		$("div.gallery a").lightBox({
            imageLoading:           '<?php echo $lightbox_url; ?>images/lightbox-ico-loading.gif',      // (string) Path and the name of the loading icon
            imageBtnPrev:           '<?php echo $lightbox_url; ?>images/lightbox-btn-prev.gif',         // (string) Path and the name of the prev button image
            imageBtnNext:           '<?php echo $lightbox_url; ?>images/lightbox-btn-next.gif',         // (string) Path and the name of the next button image
            imageBtnClose:          '<?php echo $lightbox_url; ?>images/lightbox-btn-close.gif',        // (string) Path and the name of the close btn
            imageBlank:             '<?php echo $lightbox_url; ?>images/lightbox-blank.gif',            // (string) Path and the name of a blank image (one pixel)
            txtImage:               'Imagen',   // (string) Specify text "Image"
            txtOf:                  'de',       // (string) Specify text "of"
        });
    }); // Ready
</script>

