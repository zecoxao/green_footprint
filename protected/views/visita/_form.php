<div class="form">
    <?php
    /** @var VisitaController $this */
    /** @var Visita $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'visita-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->datepickerRow($model, 'data', array(
					                'options' => array(
					                    'language' => 'en',
					                    'format' => 'yyyy-mm-dd', 
					                    'weekStart'=> 1,
					                    'autoclose'=>'true',
					                    'keyboardNavigation'=>true,
					                ), 
					            ), array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php echo $form->dropDownListRow($model, 'empresa', CHtml::listData(Empresa::model()->findAll(), 'id', Empresa::representingColumn())) ?>
                        <?php echo $form->dropDownListRow($model, 'profissional', CHtml::listData(Profissional::model()->findAll(), 'id', Profissional::representingColumn())) ?>
            <div class="row nm_row">
<label for="equipamentos"><?php echo Yii::t('app', 'Equipamentos'); ?></label>
<?php echo CHtml::checkBoxList('Visita[equipamentos]', array_map('AweHtml::getPrimaryKey', $model->equipamentos),
CHtml::listData(Equipamento::model()->findAll(), 'id', 'nome'),
array('attributeitem' => 'id', 'checkAll' => 'Select All')) ?></div>

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