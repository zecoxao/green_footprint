<?php

Yii::import('application.models._base.BaseSimulacaoEquipamento');

class SimulacaoEquipamento extends BaseSimulacaoEquipamento
{
    /**
     * @return SimulacaoEquipamento
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'SimulacaoEquipamento|SimulacaoEquipamentos', $n);
    }

}