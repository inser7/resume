<?php
/* @var $this WorkController */
/* @var $model Work */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'work-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="control-group">
        <label class="control-label" for="inputEmail"><?php echo $form->labelEx($model,'namecompany'); ?></label>
        <div class="controls">
            <?php echo $form->textField($model,'namecompany',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'namecompany'); ?>
        </div>
    </div>



    <div class="control-group">
        <label class="control-label"><?php echo $form->labelEx($model,'lang'); ?></label>
        <div class="controls">
            <?php echo $form->textField($model,'lang',array('size'=>2,'maxlength'=>2)); ?>
            <?php echo $form->error($model,'lang'); ?>
        </div>
	</div>

    <div class="control-group">
        <label class="control-label"><?php echo $form->labelEx($model,'urlcompany'); ?></label>
        <div class="controls">
            <?php echo $form->textField($model,'urlcompany',array('size'=>60,'maxlength'=>128)); ?>
            <?php echo $form->error($model,'urlcompany'); ?>
        </div>
	</div>

    <div class="control-group">
        <label class="control-label"><?php echo $form->labelEx($model,'countrycompany'); ?></label>
        <div class="controls">
            <?php echo $form->textField($model,'countrycompany',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'countrycompany'); ?>
        </div>
	</div>

    <div class="control-group">
        <label class="control-label"><?php echo $form->labelEx($model,'position'); ?></label>
        <div class="controls">
            <?php echo $form->textField($model,'position',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'position'); ?>
        </div>
	</div>

    <div class="control-group">
       <label class="control-label"><?php echo $form->labelEx($model,'respon'); ?></label>
       <div class="controls">
            <?php echo $form->textArea($model,'respon',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'respon'); ?>
       </div>
	</div>

    <div class="control-group">
        <label class="control-label"><?php echo $form->labelEx($model,'period'); ?></label>
        <div class="controls">
            <?php echo $form->textField($model,'period',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'period'); ?>
        </div>
	</div>

    <div class="control-group">
        <label class="control-label"><?php echo $form->labelEx($model,'pub_date'); ?></label>
        <div class="controls">
            <?php echo $form->textField($model,'pub_date'); ?>
            <?php echo $form->error($model,'pub_date'); ?>
        </div>
	</div>

    <div class="control-group">
        <label class="control-label"><?php echo $form->labelEx($model,'user_id'); ?></label>
        <div class="controls">
            <?php echo $form->textField($model,'user_id'); ?>
            <?php echo $form->error($model,'user_id'); ?>
        </div>
    </div>

	<div class="btn btn-primary">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->