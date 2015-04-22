<?php
/** @var VisitaController $this */
/** @var Visita $model */
$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Visita::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Visita::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Visita::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'data',
        array(
			'name'=>'empresa',
			'value'=>($model->empresa0 !== null) ? CHtml::link($model->empresa0, array('/empresa/view', 'id' => $model->empresa0->id)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'profissional',
			'value'=>($model->profissional0 !== null) ? CHtml::link($model->profissional0, array('/profissional/view', 'id' => $model->profissional0->id)).' ' : null,
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