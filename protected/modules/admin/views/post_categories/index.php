<?php
$this->breadcrumbs=array(
	'Post Categories',
);

$this->menu=array(
	array('label'=>'Create PostCategory', 'url'=>array('create')),
	array('label'=>'Manage PostCategory', 'url'=>array('admin')),
);
?>

<h1>Post Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
