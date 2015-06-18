<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'VisitaEquipamentos',
);

$this->menu=array(
	array('label'=>'Create VisitaEquipamento', 'url'=>array('create')),
	array('label'=>'Manage VisitaEquipamento', 'url'=>array('admin')),
);
?>

<h1>VisitaEquipamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
