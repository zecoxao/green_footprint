<?php
/** @var ProfissionalController $this */
/** @var Profissional $data */
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
    </div>