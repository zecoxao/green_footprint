<?php
/** @var EquipamentoController $this */
/** @var Equipamento $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nome)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nome); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->potencia0->potencia)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('potencia')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->potencia0->potencia); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->horas)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('horas')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->horas); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->quantidade)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('quantidade')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->quantidade); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->consumo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('consumo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->consumo); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>