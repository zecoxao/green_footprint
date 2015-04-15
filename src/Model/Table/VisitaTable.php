<?php
namespace App\Model\Table;

use App\Model\Entity\Visitum;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Visita Model
 */
class VisitaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('visita');
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
            ->add('data', 'valid', ['rule' => 'date'])
            ->requirePresence('data', 'create')
            ->notEmpty('data')
            ->add('empresa', 'valid', ['rule' => 'numeric'])
            ->requirePresence('empresa', 'create')
            ->notEmpty('empresa')
            ->add('profissional', 'valid', ['rule' => 'numeric'])
            ->requirePresence('profissional', 'create')
            ->notEmpty('profissional')
            ->add('equipamento', 'valid', ['rule' => 'numeric'])
            ->requirePresence('equipamento', 'create')
            ->notEmpty('equipamento');

        return $validator;
    }
}
