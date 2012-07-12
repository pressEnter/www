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
