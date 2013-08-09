<div class="section article highlight" id="highlight-huayra">
    <div class="info-wrapper">
		<div class="hgroup">
			<h2><?php echo CHtml::link('Huayra GNU/Linux', 'http://huayra.conectarigualdad.gob.ar', array('target' => '_blank')); ?></h2>
			<h3>Sistema operativo libre de  Conectar Igualdad</h3>
		</div>
    </div>
    <div class="image-wrapper">
		<p>Algunos miembros de <strong>pressEnter</strong> tenemos el agrado de participar del desarrollo de <strong>Huayra GNU/Linux</strong>. Basado en <strong>Debian GNU/Linux</strong>, <strong>Huayra</strong> es más seguro, más ágil y desarrollado en Argentina teniendo en cuenta las necesidades tantos de estudiantes como de docentes y manteniendo nuestra identidad nacional. <strong>Huayra</strong> toma su nombre del vocablo <strong>quechua</strong> que significa <strong>viento</strong>: viento de cambios, vientos de libertad, vientos de soberanía tecnológica. Además de ser un sistema operativo libre, Huayra ha sido pensado y desarrollado para el uso de la comunidad educativa. A través de él puede accederse a una gran variedad de programas y aplicaciones educativas.</p>
    </div>
	<div id="huayra-gallery-wrapper">
		
		<div class="gallery" id="highlihght-huayra-gallery">

		<!-- root element for the items -->
		
		<div id="huayra-gallery-nav"></div>
			<div class="items">
				<?php $images_url = Yii::app()->request->getBaseUrl(true).'/images/highlights/huayra/'; ?>
				<div>
					<img src="<?php echo $images_url . '01.png'; ?>" />
				</div>
				<div>
					<img src="<?php echo $images_url . '02.png'; ?>" />
				</div>
				<div>
					<img src="<?php echo $images_url . '03.png'; ?>" />
				</div>
				<div>
					<img src="<?php echo $images_url . '04.png'; ?>" />
				</div>
				
			</div> <!-- items -->
			
		</div> <!-- highlihght-huayra-gallery -->
		
	</div> <!-- huayra-gallery-wrapper -->
	
</div> <!-- article -->

<script type='text/javascript'>
    <?php $lightbox_url = Yii::app()->theme->baseUrl . '/js/jquery-lightbox-0.5/'; ?>
    $(document).ready(function(){ 
		$("#highlihght-huayra-gallery").scrollable({
			circular: true
		}).autoscroll({
			autoplay: true
		}).navigator({
			//navi: 'div#huayra-gallery-nav'
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

