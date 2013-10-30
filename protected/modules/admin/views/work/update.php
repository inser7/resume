<?php
/* @var $this WorkController */
/* @var $model Work */

$this->breadcrumbs=array(
	'Works'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Work', 'url'=>array('index')),
	array('label'=>'Create Work', 'url'=>array('create')),
	array('label'=>'View Work', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Work', 'url'=>array('admin')),
);
?>

<h1>Update Work <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>