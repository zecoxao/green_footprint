<script>
jQuery(document).ready(function($) {
// Calculate sub-sums on any form changes
    $("#equipamento-form").change(function() {
        var sum = 0;
        var one = parseFloat(document.getElementById("Equipamento_horas").value);
        var two = parseFloat(document.getElementById("Equipamento_quantidade").value);
        var e = document.getElementById("Equipamento_potencia");
        var three = Number(e.options[e.selectedIndex].text);
        $('.span-5').each(function() {
          sum = one * two * three ;
          document.getElementById("Equipamento_consumo").value = sum
        });
    });
});
</script>
<div class="form">
    <?php
    /** @var EquipamentoController $this */
    /** @var Equipamento $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'equipamento-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'nome', array('class' => 'span5', 'maxlength' => 50)) ?>
                        <?php echo $form->dropDownListRow($model, 'potencia', CHtml::listData(Potencia::model()->findAll(), 'id', 'potencia')) ?>
                        <?php echo $form->textFieldRow($model, 'horas', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'quantidade', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'consumo', array('class' => 'span5')) ?>
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
