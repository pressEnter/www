<?php
$this->breadcrumbs=array(
	'Post Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PostCategory', 'url'=>array('index')),
	array('label'=>'Create PostCategory', 'url'=>array('create')),
	array('label'=>'Update PostCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PostCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PostCategory', 'url'=>array('admin')),
);
?>

<h1>View PostCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'slug',
	),
)); ?>
