<?php
/** @var VisitaController $this */
/** @var Visita $model */
$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . Visita::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . Visita::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('visita-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Visita::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'visita-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        'data',
        array(
                    'name' => 'empresa',
                    'value' => 'isset($data->empresa0) ? $data->empresa0 : null',
                    'filter' => CHtml::listData(Empresa::model()->findAll(), 'id', Empresa::representingColumn()),
                ),
        array(
                    'name' => 'profissional',
                    'value' => 'isset($data->profissional0) ? $data->profissional0 : null',
                    'filter' => CHtml::listData(Profissional::model()->findAll(), 'id', Profissional::representingColumn()),
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