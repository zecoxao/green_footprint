<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'SimulacaoEquipamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SimulacaoEquipamentos', 'url'=>array('index')),
    array('label'=>'Manage SimulacaoEquipamento', 'url'=>array('admin')),
);
?>

<h1>Create SimulacaoEquipamento</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
