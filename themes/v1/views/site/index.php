<div class="highlight" id="highlight-alba">
	<div class="info-wrapper">
		<h2>Proyecto ALBA</h2>
		<h3>Sistema Libre de Gestión Educativa</h3>
		<p>Sed elit felis, ornare in eleifend et, gravida ut risus. Vestibulum dictum egestas quam eu faucibus. Vestibulum ante dui, hendrerit vel cursus id, fringilla at ligula. Donec interdum vehicula tempus. Maecenas faucibus volutpat risus vitae blandit. Proin ut urna vitae nisl dignissim mattis. Proin sed enim ac turpis ultricies gravida sit amet at urna.</p>
	</div>
	<div class="image-wrapper">
		<?php echo CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/pizarron-533x335.jpg'); ?>
		<p>El Proyecto Alba, es un proyecto de desarrollo de Software para la realización de un <strong>“Sistema Informático Abierto de Gestión Unificada para Unidades Educacionales”</strong>, que brindará una herramienta realizada en <strong>software libre</strong>, para el trabajo cotidiano en estas unidades. Por su tipo de licenciamiento bajo la <strong>GNU/GPL</strong>, el sistema permitirá una reutilización y actualización constante, como así también la posibilidad de aprovechamiento de módulos ya realizados por otros emprendedores (siempre que sean compatibles con esta licencia).</p>
	</div>
	<div class="gallery">
		<a href="<?php echo Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/entrada-legajo-pedagogico.jpg'; ?>">
			<img src="<?php echo Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/entrada-legajo-pedagogico-thumb.jpg'; ?>" title="Legajo pedagógico" />
		</a>		
		<a href="<?php echo Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/notas-boletin.jpg'; ?>">
			<img src="<?php echo Yii::app()->request->getBaseUrl(true).'/images/highlights/alba/notas-boletin-thumb.jpg'; ?>" title="Boletín de notas" />
		</a>
		<hr />
	</div>
	<div class="read-more">
		<?php echo CHtml::link('<span>Leer más</span>', '#'); ?>
	</div>
</div>
<div id="news-updates">
	<div id="news">
		<h3>Noticias</h3>
	
	</div>
	<div id="updates">
		<h3>Actualizaciones</h3>
	
	</div>
</div>
<div id="technologies">
	<h3>Tecnologías <span>utilizadas</span></h3>
	<ul>
		<li>&nbsp;</li>
	</ul>
</div>
<script type='text/javascript'>
	<?php $lightbox_url = Yii::app()->theme->baseUrl . '/js/jquery-lightbox-0.5/'; ?>
	$(document).ready(function(){ 
		$("div.gallery a").lightBox({
			imageLoading:			'<?php echo $lightbox_url; ?>images/lightbox-ico-loading.gif',		// (string) Path and the name of the loading icon
			imageBtnPrev:			'<?php echo $lightbox_url; ?>images/lightbox-btn-prev.gif',			// (string) Path and the name of the prev button image
			imageBtnNext:			'<?php echo $lightbox_url; ?>images/lightbox-btn-next.gif',			// (string) Path and the name of the next button image
			imageBtnClose:			'<?php echo $lightbox_url; ?>images/lightbox-btn-close.gif',		// (string) Path and the name of the close btn
			imageBlank:				'<?php echo $lightbox_url; ?>images/lightbox-blank.gif',			// (string) Path and the name of a blank image (one pixel)
			txtImage:				'Imagen',	// (string) Specify text "Image"
			txtOf:					'de',		// (string) Specify text "of"
		}); 
	}); 
</script>
