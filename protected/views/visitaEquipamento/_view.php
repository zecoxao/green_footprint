<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'visita'=>$data->visita, 'equipamento'=>$data->equipamento)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('visita')); ?>:</b>
	<?php echo CHtml::encode($data->visita); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('equipamento')); ?>:</b>
	<?php echo CHtml::encode($data->equipamento); ?><br />
</div>
