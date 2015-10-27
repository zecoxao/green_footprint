<?php

Yii::import('application.models._base.BaseVisita');

class Visita extends BaseVisita
{
    /**
     * @return Visita
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Visita|Visitas', $n);
    }

}