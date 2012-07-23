<?php $this->pageTitle = 'pressEnter | Noticias'; ?>
<?php $this->metaDescription = 'Noticias de interés en el ámbito de las cooperativas de software libre.'; ?>
<h2>Noticias</h2>
<?php $this->widget('Posts', array(
	'minimal' => true,
	'showSocialLinks' => true
)); ?>
