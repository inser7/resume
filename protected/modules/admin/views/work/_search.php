<?php
/* @var $this WorkController */
/* @var $model Work */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
    <div class="control-group">
        <label class="control-label" for="inputEmail"><?php echo $form->label($model,'id'); ?></label>
        <div class="controls">
            <?php echo $form->textField($model,'id'); ?>
        </div>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namecompany'); ?>
		<?php echo $form->textField($model,'namecompany',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'urlcompany'); ?>
		<?php echo $form->textField($model,'urlcompany',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'countrycompany'); ?>
		<?php echo $form->textField($model,'countrycompany',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'respon'); ?>
		<?php echo $form->textArea($model,'respon',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'period'); ?>
		<?php echo $form->textField($model,'period',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pub_date'); ?>
		<?php echo $form->textField($model,'pub_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->