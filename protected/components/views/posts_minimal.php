<?php if(count($posts) > 0): ?>
<div id="posts-wrapper" class="minimal<?php echo $extraWrapperClasses; ?>">
	<?php foreach($posts as $post): ?>
	<div class="post<?php echo $extraItemClasses; ?>">
		<div class="published-date"><?php echo date('d/m/Y', strtotime($post->published_date)); ?></div>
		<h4><?php echo $post->title; ?></h4>
		<div class="body">
			<p><?php echo strip_tags(substr($post->body, 0, 300), '<strong><em>'); ?>...</p>
		</div>
		<div class="read-more">
			<?php echo CHtml::link('Leer más', '/noticias/leer/'.$post->id . '/' .$post->slug); ?>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<?php elseif($showNoResults): ?>
	<div class="no-results">
		<p>No se encontraron artículos que mostrar.</p>
	</div>
<?php endif; ?>
