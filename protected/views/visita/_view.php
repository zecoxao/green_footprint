<?php
/** @var VisitaController $this */
/** @var Visita $data */
?>
<div class="view">
                    
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
                
        <?php if (!empty($data->profissional0->id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('profissional')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->profissional0->id); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>