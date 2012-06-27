<?php if(count($posts) > 0): ?>
	<div id="posts-wrapper" class="full<?php echo $extraWrapperClasses; ?>">
	<?php $count = 0; foreach($posts as $post): $count++; ?>
	<?php 
	$position_class = '';
	if($count == 1){
		$position_class = ' first';
	} elseif($count == count($posts)) {
		$position_class .= ' last';
	} 
	?>
	<div class="post<?php echo $extraItemClasses . $position_class; ?>">
		<div class="post<?php echo $extraItemClasses; ?>">
			<?php 
			$date_parts = getdate(strtotime($post->published_date));
			$date_out = "
			<span class='day'>{$date_parts['mday']}</span> de 
			<span class='month'>" . Yii::app()->locale->getMonthName($date_parts['mon'], 'wide') . "</span>
			de <span class='year'>{$date_parts['year']}</span>
			";
			?>
			<div class="published-date"><?php echo $date_out; ?></div>
			<h3><?php echo $post->title; ?></h3>
			<div class="body">
			<?php echo $post->body; ?>
			</div>
			<?php if($showSocialLinks): ?>
			<?php $url = Yii::app()->getBaseUrl(true).'/noticias/leer/'.$post->id . '/' .$post->slug; ?>
			<?php Yii::app()->controller->renderPartial('application.views._social_links', array('url' => $url, 'title' => $post->title)); ?>
			<?php endif; ?>
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
