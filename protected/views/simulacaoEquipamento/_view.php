<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'simulacao'=>$data->simulacao, 'equipamento'=>$data->equipamento)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('simulacao')); ?>:</b>
	<?php echo CHtml::encode($data->simulacao); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('equipamento')); ?>:</b>
	<?php echo CHtml::encode($data->equipamento); ?><br />
</div>
