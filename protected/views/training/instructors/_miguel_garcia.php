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
	<p>Arquitecto de software, con amplia experiencia en desarrollo de aplicaciones web.</p>
	<p>Ha trabajado para organizaciones y empresas desarrollando aplicaciones web sobre Symfony, que son utilizadas diariamente por cientos de usuarios.</p>
</div>
