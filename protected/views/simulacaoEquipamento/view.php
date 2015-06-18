<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'SimulacaoEquipamentos'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List SimulacaoEquipamento', 'url'=>array('index')),
	array('label'=>'Create SimulacaoEquipamento', 'url'=>array('create')),
	array('label'=>'Update SimulacaoEquipamento', 'url'=>array('update', 'simulacao'=>$model->simulacao, 'equipamento'=>$model->equipamento)),
	array('label'=>'Delete SimulacaoEquipamento', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'simulacao'=>$model->simulacao, 'equipamento'=>$model->equipamento),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SimulacaoEquipamento', 'url'=>array('admin')),
);
?>

<h1>View SimulacaoEquipamento</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'simulacao',
		'equipamento',
	),
)); ?>
