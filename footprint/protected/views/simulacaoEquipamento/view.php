<?php
/** @var SimulacaoEquipamentoController $this */
/** @var SimulacaoEquipamento $model */
$this->breadcrumbs=array(
	'Simulacao Equipamentos'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . SimulacaoEquipamento::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . SimulacaoEquipamento::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . SimulacaoEquipamento::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        array(
			'name'=>'simulacao',
			'value'=>($model->simulacao0 !== null) ? CHtml::link($model->simulacao0, array('/simulacao/view', 'id' => $model->simulacao0->id)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'equipamento',
			'value'=>($model->equipamento0 !== null) ? CHtml::link($model->equipamento0, array('/equipamento/view', 'id' => $model->equipamento0->id)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>