<?php

Yii::import('application.models._base.BaseProfissional');

class Profissional extends BaseProfissional
{
    /**
     * @return Profissional
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Profissional|Profissionals', $n);
    }

}