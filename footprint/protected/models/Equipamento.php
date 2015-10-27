<?php

Yii::import('application.models._base.BaseEquipamento');

class Equipamento extends BaseEquipamento
{
    /**
     * @return Equipamento
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Equipamento|Equipamentos', $n);
    }

}