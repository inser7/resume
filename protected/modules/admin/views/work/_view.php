<?php
/* @var $this WorkController */
/* @var $data Work */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namecompany')); ?>:</b>
	<?php echo CHtml::encode($data->namecompany); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('urlcompany')); ?>:</b>
	<?php echo CHtml::encode($data->urlcompany); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('countrycompany')); ?>:</b>
	<?php echo CHtml::encode($data->countrycompany); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</b>
	<?php echo CHtml::encode($data->position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respon')); ?>:</b>
	<?php echo CHtml::encode($data->respon); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('period')); ?>:</b>
	<?php echo CHtml::encode($data->period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pub_date')); ?>:</b>
	<?php echo CHtml::encode($data->pub_date); ?>
	<br />

	*/ ?>

</div>