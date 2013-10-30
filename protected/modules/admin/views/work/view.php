<?php
/* @var $this WorkController */
/* @var $model Work */

$this->breadcrumbs=array(
	'Works'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Work', 'url'=>array('index')),
	array('label'=>'Create Work', 'url'=>array('create')),
	array('label'=>'Update Work', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Work', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Work', 'url'=>array('admin')),
);
?>

<h1>View Work #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'namecompany',
		'lang',
		'urlcompany',
		'countrycompany',
		'position',
		'respon',
		'period',
		'pub_date',
	),
)); ?>
