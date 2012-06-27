<?php 
$messages = Yii::app()->user->getFlashes(); 
if(count($messages) > 0):  ?>
<div id="messages">
	<?php foreach($messages as $key => $message): ?>
	<div class='message <?php echo $key; ?>'><?php echo $message; ?></div>
	<?php endforeach; ?>
</div>
<?php endif; ?>
