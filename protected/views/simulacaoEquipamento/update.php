<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'SimulacaoEquipamentos'=>array('index'),
	'View'=>array('view', 'simulacao'=>$model->simulacao, 'equipamento'=>$model->equipamento),
	'Update',
);

$this->menu=array(
	array('label'=>'List SimulacaoEquipamento', 'url'=>array('index')),
	array('label'=>'Create SimulacaoEquipamento', 'url'=>array('create')),
	array('label'=>'View SimulacaoEquipamento', 'url'=>array('view', 'simulacao'=>$model->simulacao, 'equipamento'=>$model->equipamento)),
	array('label'=>'Manage SimulacaoEquipamento', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
