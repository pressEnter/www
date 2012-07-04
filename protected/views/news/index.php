<?php $this->pageTitle = 'Pressenter | Noticias'; ?>
<h1>Noticias</h1>
<div id="posts-wrapper">	
	<?php $this->widget('Posts', array(
		'minimal' => true,
		'showSocialLinks' => true
	)); ?>
</div>
