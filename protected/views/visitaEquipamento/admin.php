<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'VisitaEquipamentos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List VisitaEquipamentos', 'url'=>array('index')),
	array('label'=>'Create VisitaEquipamento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('visitaEquipamentogrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage VisitaEquipamentos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'visitaEquipamentogrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'visita',
        'equipamento',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("visitaEquipamento/view/", 
                                            array("visita"=>$data->visita, "equipamento"=>$data->equipamento
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("visitaEquipamento/update/", 
                                            array("visita"=>$data->visita, "equipamento"=>$data->equipamento
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("visitaEquipamento/delete/", 
                                            array("visita"=>$data->visita, "equipamento"=>$data->equipamento
											))',
                ),
            ),
        ),
    ),
)); ?>
