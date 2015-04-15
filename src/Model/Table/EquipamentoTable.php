<?php
namespace App\Model\Table;

use App\Model\Entity\Equipamento;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipamento Model
 */
class EquipamentoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('equipamento');
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome')
            ->add('potencia', 'valid', ['rule' => 'numeric'])
            ->requirePresence('potencia', 'create')
            ->notEmpty('potencia')
            ->add('horas', 'valid', ['rule' => 'numeric'])
            ->requirePresence('horas', 'create')
            ->notEmpty('horas')
            ->add('quantidade', 'valid', ['rule' => 'numeric'])
            ->requirePresence('quantidade', 'create')
            ->notEmpty('quantidade')
            ->add('consumo', 'valid', ['rule' => 'numeric'])
            ->requirePresence('consumo', 'create')
            ->notEmpty('consumo');

        return $validator;
    }
}
