<?php
/** @var EmpresaController $this */
/** @var Empresa $data */
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
                
        <?php if (!empty($data->localidade)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('localidade')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->localidade); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->cae0->descricao)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cae')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cae0->descricao); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>