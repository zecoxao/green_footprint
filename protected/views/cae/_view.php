<?php
/** @var CaeController $this */
/** @var Cae $data */
?>
<div class="view">
                    
        <?php if (!empty($data->descricao)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->descricao); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->media)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('media')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->media); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>