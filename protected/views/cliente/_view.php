<?php
/** @var ClienteController $this */
/** @var Cliente $data */
?>
<div class="view">
                    
        <?php if (!empty($data->utilizador0->nome)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('utilizador')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->utilizador0->nome); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->empresa0->nome)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('empresa')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->empresa0->nome); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>