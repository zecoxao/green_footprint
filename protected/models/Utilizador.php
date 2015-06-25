<?php

Yii::import('application.models._base.BaseUtilizador');

class Utilizador extends BaseUtilizador
{
    /**
     * @return Utilizador
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Utilizador|Utilizadors', $n);
    }

}