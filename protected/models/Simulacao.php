<?php

Yii::import('application.models._base.BaseSimulacao');

class Simulacao extends BaseSimulacao
{
    /**
     * @return Simulacao
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Simulacao|Simulacaos', $n);
    }

}