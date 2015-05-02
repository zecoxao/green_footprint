<div class="form">
    <?php
    /** @var EmpresaController $this */
    /** @var Empresa $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'empresa-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'nome', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->textFieldRow($model, 'latitude', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'longitude', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'localidade', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->dropDownListRow($model, 'cae', CHtml::listData(Cae::model()->findAll(), 'id', Cae::representingColumn())) ?>
                <div class="form-actions">
                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>