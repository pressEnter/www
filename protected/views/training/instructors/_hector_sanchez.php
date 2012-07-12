<div class="details instructor-details">
	<div class="hgroup">
		<h3>Acerca del instructor</h3>
		<h4><?php echo CHtml::link('Héctor "Karucha" Sanchez', array('/about-us', '#' => 'hector-sanchez')); ?></h4>
	</div>
	<div class="figure">
		<?php echo CHtml::link(
			CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/about-us/hector-sanchez-100x100-color.jpg', 'Héctor Sánchez', array('title' => 'Héctor Sánchez')),
			array('/about-us', '#' => 'hector-sanchez')
		); ?>
    </div><p>
Texto relacionado a django
</p>
</div>
