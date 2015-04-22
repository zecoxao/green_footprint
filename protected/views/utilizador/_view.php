<?php
/** @var UtilizadorController $this */
/** @var Utilizador $data */
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
                    
        <?php if (!empty($data->contacto)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('contacto')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->contacto); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>