<div class="details instructor-details">
	<div class="hgroup">
		<h3>Acerca del instructor</h3>
		<h4><?php echo CHtml::link('Fernando Toledo', array('/about-us', '#' => 'fernando-toledo')); ?></h4>
	</div>
	<div class="figure">
		<?php echo CHtml::link(
			CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/about-us/fernando-toledo-100x100-color.jpg', 'Fernando Toledo', array('title' => 'Fernando Toledo')),
			array('/about-us', '#' => 'fernando-toledo')
		); ?>
	</div>
	<p>Desarrollador y Administrador de sistemas con más de 10 años de trabajo sobre plataformas <strong>GNU/Linux</strong>.</p>
	<p>Posee amplios conocimientos en hardware, software e infraestructura de redes y se especializa en implentaciones de sevidores, seguridad y monitoreo.</p>
	<p>Miembro de <a href="http://www.solar.org.ar" target="_blank">SoLAr</a>, promotor y partícipe activo en varios proyectos de <strong>Software Libre</strong> alrededor del mundo.</p>
	<p>Es uno de creadores y actual mantenedor del <a href="http://www.proyectoalba.com.ar" target="_blank">Proyecto Alba</a>.</p>
</div>
