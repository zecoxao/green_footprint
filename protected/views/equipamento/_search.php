<?php
/** @var EquipamentoController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'nome', array('class' => 'span5', 'maxlength' => 50)); ?>

<?php echo $form->dropDownListRow($model, 'potencia', CHtml::listData(Potencia::model()->findAll(), 'id', Potencia::representingColumn())); ?>

<?php echo $form->textFieldRow($model, 'horas', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'quantidade', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'consumo', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
