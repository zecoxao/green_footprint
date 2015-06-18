<?php
/** @var SimulacaoController $this */
/** @var Simulacao $data */
?>
<div class="view">
                    
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
                
        <?php if (!empty($data->data)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->data, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->data)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->consumo_total)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('consumo_total')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->consumo_total); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>