<?php
$this->breadcrumbs=array(
	'Post Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PostCategory', 'url'=>array('index')),
	array('label'=>'Manage PostCategory', 'url'=>array('admin')),
);
?>

<h1>Create PostCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>