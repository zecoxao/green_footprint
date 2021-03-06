<?php

/**
 * This is the model base class for the table "potencia".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Potencia".
 *
 * Columns in table "potencia" available as properties of the model,
 * followed by relations of table "potencia" available as properties of the model.
 *
 * @property integer $id
 * @property double $potencia
 *
 * @property Equipamento[] $equipamentos
 */
abstract class BasePotencia extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'potencia';
    }

    public static function representingColumn() {
        return 'id';
    }

    public function rules() {
        return array(
            array('potencia', 'required'),
            array('potencia', 'numerical'),
            array('id, potencia', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'equipamentos' => array(self::HAS_MANY, 'Equipamento', 'potencia'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'potencia' => Yii::t('app', 'Potencia'),
                'equipamentos' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('potencia', $this->potencia);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}