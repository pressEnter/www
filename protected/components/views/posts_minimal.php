<?php if(count($posts) > 0): ?>
<div id="news-wrapper" class="articles-wrapper minimal<?php echo $extraWrapperClasses; ?>">
	<?php $count = 0; foreach($posts as $post): $count++; ?>
	<?php 
	$position_class = '';
	if($count == 1){
		$position_class = ' first';
	} elseif($count == count($posts)) {
		$position_class .= ' last';
	} 
	?>
	<div class="article <?php echo $extraItemClasses . $position_class; ?>">
		<?php 
		$date_parts = getdate(strtotime($post->published_date));
		$date_out = "
		<span class='month'>" . Yii::app()->locale->getMonthName($date_parts['mon'], 'wide') . "</span>
		<span class='day'>{$date_parts['mday']}</span>
		<span class='year'>{$date_parts['year']}</span>
		";
		$url = Yii::app()->createUrl('news/read', array('id' => $post->id, 'slug' => $post->slug));
		?>
		<div class="header">
			<div class="published-date"><?php echo $date_out; ?></div>
			
			<h2><?php echo CHtml::link($post->title, $url); ?></h2>
		</div>
		<div class="body">
			<p><?php echo strip_tags(substr($post->body, 0, 300)); ?>...</p>
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
<?php elseif($showNoResults): ?>
	<div class="no-results">
		<p>No se encontraron artículos que mostrar.</p>
	</div>
<?php endif; ?>
