<?php
/** @var PotenciaController $this */
/** @var Potencia $data */
?>
<div class="view">
                    
        <?php if (!empty($data->potencia)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('potencia')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->potencia); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>