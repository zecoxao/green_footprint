<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'simulacao'); ?>
        <?php echo $form->textField($model,'simulacao'); ?>
        <?php echo $form->error($model,'simulacao'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'equipamento'); ?>
        <?php echo $form->textField($model,'equipamento'); ?>
        <?php echo $form->error($model,'equipamento'); ?>
    </div>
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
