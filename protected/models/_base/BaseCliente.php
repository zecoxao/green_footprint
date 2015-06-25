<?php

/**
 * This is the model base class for the table "cliente".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Cliente".
 *
 * Columns in table "cliente" available as properties of the model,
 * followed by relations of table "cliente" available as properties of the model.
 *
 * @property integer $id
 * @property string $nome
 * @property string $password
 * @property integer $empresa
 *
 * @property Empresa $empresa0
 */
abstract class BaseCliente extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'cliente';
    }

    public static function representingColumn() {
        return 'nome';
    }

    public function rules() {
        return array(
            array('nome, password, empresa', 'required'),
            array('empresa', 'numerical', 'integerOnly'=>true),
            array('nome, password', 'length', 'max'=>50),
            array('id, nome, password, empresa', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'empresa0' => array(self::BELONGS_TO, 'Empresa', 'empresa'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'nome' => Yii::t('app', 'Nome'),
                'password' => Yii::t('app', 'Password'),
                'empresa' => Yii::t('app', 'Empresa'),
                'empresa0' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nome', $this->nome, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('empresa', $this->empresa);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}