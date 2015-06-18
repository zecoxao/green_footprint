<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'VisitaEquipamentos'=>array('index'),
	'View'=>array('view', 'visita'=>$model->visita, 'equipamento'=>$model->equipamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List VisitaEquipamento', 'url'=>array('index')),
	array('label'=>'Create VisitaEquipamento', 'url'=>array('create')),
	array('label'=>'View VisitaEquipamento', 'url'=>array('view', 'visita'=>$model->visita, 'equipamento'=>$model->equipamento)),
	array('label'=>'Manage VisitaEquipamento', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
