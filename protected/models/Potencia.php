<?php

Yii::import('application.models._base.BasePotencia');

class Potencia extends BasePotencia
{
    /**
     * @return Potencia
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Potencia|Potencias', $n);
    }

}