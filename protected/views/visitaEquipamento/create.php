<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'VisitaEquipamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VisitaEquipamentos', 'url'=>array('index')),
    array('label'=>'Manage VisitaEquipamento', 'url'=>array('admin')),
);
?>

<h1>Create VisitaEquipamento</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
