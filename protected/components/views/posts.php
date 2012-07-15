<?php if(count($posts) > 0): ?>
<div id="news-wrapper" class="articles-wrapper<?php echo $extraWrapperClasses; ?>">
	<?php $count = 0; foreach($posts as $post): $count++; ?>
	<?php 
	$position_class = '';
	if($count == 1){
		$position_class = ' first';
	} elseif($count == count($posts)) {
		$position_class .= ' last';
	} 
	?>
	<div class="article<?php echo $extraItemClasses . $position_class; ?>">
		<?php 
		$date_parts = getdate(strtotime($post->published_date));
		$date_out = "
		<span class='day'>{$date_parts['mday']}</span> de 
		<span class='month'>" . Yii::app()->locale->getMonthName($date_parts['mon'], 'wide') . "</span>
		de <span class='year'>{$date_parts['year']}</span>
		";
		$url = Yii::app()->createUrl('news/read', array('id' => $post->id, 'slug' => $post->slug));
		?>
		<div class="header">
			<div class="published-date"><?php echo $date_out; ?></div>
			<<?php echo $headerTag ?>><?php echo $post->title; ?></<?php echo $headerTag ?>>
		</div>
		<div class="body">
		<?php echo $post->body; ?>
		</div>
		<?php if($showSocialLinks): ?>
		<div class="footer">
		<?php Yii::app()->controller->renderPartial('application.views.partials._social_links', array('url' => $url, 'title' => $post->title)); ?>
		</div>
		<?php endif; ?>
		<hr />
	</div>
	<?php endforeach; ?>
	</div>
	<?php if($showPagination && $pages->pageCount > 1): ?>
	<div class="footer">
		<div class="pagination">
		<?php $this->widget('CLinkPager', array('pages' => $pages)); ?>
		</div>
	</div>
	<?php elseif($showNoResults): ?>
	<div class="no-results">
		<p>No se encontraron artículos que mostrar.</p>
	</div>
	<?php endif; ?>
<?php endif; ?>
