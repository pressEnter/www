<?php if(count($posts) > 0): ?>
	<div id="posts-wrapper" class="full<?php echo $extraWrapperClasses; ?>">
	<?php foreach($posts as $posts): ?>
		<div class="post<?php echo $extraItemClasses; ?>">
			<h3><?php echo $post->title; ?></h3>
			<div class="body">
			<?php echo $post->body; ?>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
	<?php if($showPagination && $pages->pageCount > 1): ?>
	<div class="pagination">
	<?php $this->widget('CLinkPager', array('pages' => $pages)); ?>
	</div>
	<?php elseif($showNoResults): ?>
	<div class="no-results">
		<p>No se encontraron artículos que mostrar.</p>
	</div>
	<?php endif; ?>
<?php endif; ?>
