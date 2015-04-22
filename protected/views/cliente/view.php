<?php
/** @var ClienteController $this */
/** @var Cliente $model */
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Cliente::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Cliente::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . Cliente::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        array(
			'name'=>'utilizador',
			'value'=>($model->utilizador0 !== null) ? CHtml::link($model->utilizador0, array('/utilizador/view', 'id' => $model->utilizador0->id)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'empresa',
			'value'=>($model->empresa0 !== null) ? CHtml::link($model->empresa0, array('/empresa/view', 'id' => $model->empresa0->id)).' ' : null,
			'type'=>'html',
		),
	),
)); ?>
</fieldset>