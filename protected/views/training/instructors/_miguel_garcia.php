<div class="details instructor-details">
	<div class="hgroup">
		<h3>Acerca del instructor</h3>
		<h4><?php echo CHtml::link('Miguel García', array('/about-us', '#' => 'miguel-garcia')); ?></h4>
	</div>
	<div class="figure">
		<?php echo CHtml::link(
			CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/about-us/miguel-garcia-100x100-color.jpg', 'Miguel García', array('title' => 'Miguel García')),
			array('/about-us', '#' => 'miguel-garcia')
		); ?>
	</div>	
	<p>Arquitecto de software, con amplia experiencia en gestión de proyectos y desarrollo de aplicaciones web y de escritorio utilizando tecnologías <strong>libres</strong>: Python, PHP5, C++ y SQL.</p>
	<p>Especializado en diseño <strong>OOP</strong>, metodologías <strong>ágiles</strong>, optimización de aplicaciones e integración con librerias y servicios de terceros.</p>
	<p>Ha participado en varios proyectos complejos, creando soluciones tecnológicas para empresas y organizaciones de Argentina, Canada y USA.</p>
	<p>Está interesado en la utilización de <strong>best practices</strong> para mejorar la calidad del proceso de desarrollo y del software creado, minimizando los costos.</p>
</div>
