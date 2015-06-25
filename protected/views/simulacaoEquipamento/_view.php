<?php
/** @var SimulacaoEquipamentoController $this */
/** @var SimulacaoEquipamento $data */
?>
<div class="view">
                    
        <?php if (!empty($data->simulacao0->data)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('simulacao')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->simulacao0->data); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->equipamento0->nome)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('equipamento')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->equipamento0->nome); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>