<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'VisitaEquipamentos'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List VisitaEquipamento', 'url'=>array('index')),
	array('label'=>'Create VisitaEquipamento', 'url'=>array('create')),
	array('label'=>'Update VisitaEquipamento', 'url'=>array('update', 'visita'=>$model->visita, 'equipamento'=>$model->equipamento)),
	array('label'=>'Delete VisitaEquipamento', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'visita'=>$model->visita, 'equipamento'=>$model->equipamento),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VisitaEquipamento', 'url'=>array('admin')),
);
?>

<h1>View VisitaEquipamento</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'visita',
		'equipamento',
	),
)); ?>
