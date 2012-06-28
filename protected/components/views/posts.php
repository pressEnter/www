<?php if(count($posts) > 0): ?>
	<div id="posts-wrapper" class="<?php echo $extraWrapperClasses; ?>">
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
		<?php 
		$date_parts = getdate(strtotime($post->published_date));
		$date_out = "
		<span class='day'>{$date_parts['mday']}</span> de 
		<span class='month'>" . Yii::app()->locale->getMonthName($date_parts['mon'], 'wide') . "</span>
		de <span class='year'>{$date_parts['year']}</span>
		";
		?>
		<div class="published-date"><?php echo $date_out; ?></div>
		<h2><?php echo $post->title; ?></h2>
		<div class="body">
		<?php echo $post->body; ?>
		</div>
		<?php if($showSocialLinks): ?>
		<?php $url = Yii::app()->getBaseUrl(true).'news/read/'.$post->id . '/' .$post->slug; ?>
		<?php Yii::app()->controller->renderPartial('application.views.partials._social_links', array('url' => $url, 'title' => $post->title)); ?>
		<?php endif; ?>
		<hr />
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
