<?php
/* @var $this InfoController */
/* @var $model Info */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fio'); ?>
		<?php echo $form->textField($model,'fio',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jabber'); ?>
		<?php echo $form->textField($model,'jabber',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'jabber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skype'); ?>
		<?php echo $form->textField($model,'skype',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'skype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'icq'); ?>
		<?php echo $form->textField($model,'icq',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'icq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'university'); ?>
		<?php echo $form->textField($model,'university',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'university'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'study_per'); ?>
		<?php echo $form->textField($model,'study_per',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'study_per'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diploma'); ?>
		<?php echo $form->textField($model,'diploma',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'diploma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'urluni'); ?>
		<?php echo $form->textField($model,'urluni',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'urluni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unicountry'); ?>
		<?php echo $form->textField($model,'unicountry',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'unicountry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maintitle'); ?>
		<?php echo $form->textField($model,'maintitle',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'maintitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namepage'); ?>
		<?php echo $form->textField($model,'namepage',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'namepage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profession'); ?>
		<?php echo $form->textField($model,'profession',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'profession'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quality'); ?>
		<?php echo $form->textArea($model,'quality',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'quality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exp'); ?>
		<?php echo $form->textArea($model,'exp',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'exp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->