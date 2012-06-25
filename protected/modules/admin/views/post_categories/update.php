<?php
$this->breadcrumbs=array(
	'Post Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PostCategory', 'url'=>array('index')),
	array('label'=>'Create PostCategory', 'url'=>array('create')),
	array('label'=>'View PostCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PostCategory', 'url'=>array('admin')),
);
?>

<h1>Update PostCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>