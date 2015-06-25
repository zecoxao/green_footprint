<?php
/** @var SimulacaoEquipamentoController $this */
/** @var SimulacaoEquipamento $model */
$this->breadcrumbs=array(
	'Simulacao Equipamentos'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . SimulacaoEquipamento::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . SimulacaoEquipamento::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('simulacao-equipamento-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo SimulacaoEquipamento::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'simulacao-equipamento-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
                    'name' => 'simulacao',
                    'value' => 'isset($data->simulacao0) ? $data->simulacao0 : null',
                    'filter' => CHtml::listData(Simulacao::model()->findAll(), 'id', Simulacao::representingColumn()),
                ),
        array(
                    'name' => 'equipamento',
                    'value' => 'isset($data->equipamento0) ? $data->equipamento0 : null',
                    'filter' => CHtml::listData(Equipamento::model()->findAll(), 'id', Equipamento::representingColumn()),
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>