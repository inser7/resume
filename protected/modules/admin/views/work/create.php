<?php
/* @var $this WorkController */
/* @var $model Work */

$this->breadcrumbs=array(
	'Works'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Work', 'url'=>array('index')),
	array('label'=>'Manage Work', 'url'=>array('admin')),
);
?>

<h1>Create Work</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>