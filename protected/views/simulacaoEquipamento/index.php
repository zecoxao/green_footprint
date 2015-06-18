<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'SimulacaoEquipamentos',
);

$this->menu=array(
	array('label'=>'Create SimulacaoEquipamento', 'url'=>array('create')),
	array('label'=>'Manage SimulacaoEquipamento', 'url'=>array('admin')),
);
?>

<h1>SimulacaoEquipamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
