<?php
/* @var $this InfoController */
/* @var $data Info */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fio')); ?>:</b>
	<?php echo CHtml::encode($data->fio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
	<?php echo CHtml::encode($data->telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jabber')); ?>:</b>
	<?php echo CHtml::encode($data->jabber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skype')); ?>:</b>
	<?php echo CHtml::encode($data->skype); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('icq')); ?>:</b>
	<?php echo CHtml::encode($data->icq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('university')); ?>:</b>
	<?php echo CHtml::encode($data->university); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('study_per')); ?>:</b>
	<?php echo CHtml::encode($data->study_per); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diploma')); ?>:</b>
	<?php echo CHtml::encode($data->diploma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('urluni')); ?>:</b>
	<?php echo CHtml::encode($data->urluni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unicountry')); ?>:</b>
	<?php echo CHtml::encode($data->unicountry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maintitle')); ?>:</b>
	<?php echo CHtml::encode($data->maintitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namepage')); ?>:</b>
	<?php echo CHtml::encode($data->namepage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profession')); ?>:</b>
	<?php echo CHtml::encode($data->profession); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quality')); ?>:</b>
	<?php echo CHtml::encode($data->quality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exp')); ?>:</b>
	<?php echo CHtml::encode($data->exp); ?>
	<br />

	*/ ?>

</div>