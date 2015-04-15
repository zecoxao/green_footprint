<?php
namespace App\Model\Table;

use App\Model\Entity\Cliente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cliente Model
 */
class ClienteTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('cliente');
        $this->displayField('id');
        $this->primaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->add('utilizador', 'valid', ['rule' => 'numeric'])
            ->requirePresence('utilizador', 'create')
            ->notEmpty('utilizador')
            ->add('empresa', 'valid', ['rule' => 'numeric'])
            ->requirePresence('empresa', 'create')
            ->notEmpty('empresa');

        return $validator;
    }
}
