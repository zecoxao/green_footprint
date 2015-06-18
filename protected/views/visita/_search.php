<?php
/** @var VisitaController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->datepickerRow($model, 'data', array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->dropDownListRow($model, 'empresa', CHtml::listData(Empresa::model()->findAll(), 'id', Empresa::representingColumn())); ?>

<?php echo $form->dropDownListRow($model, 'profissional', CHtml::listData(Profissional::model()->findAll(), 'id', Profissional::representingColumn())); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
