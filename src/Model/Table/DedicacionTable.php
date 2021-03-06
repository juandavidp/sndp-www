<?php
namespace App\Model\Table;

use App\Model\Entity\Dedicacion;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dedicacion Model
 *
 */
class DedicacionTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('dedicacion');
        $this->displayField('iddedicacion');
        $this->primaryKey('iddedicacion');

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
            ->add('iddedicacion', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('iddedicacion', 'create');

        $validator
            ->requirePresence('dedicacion', 'create')
            ->notEmpty('dedicacion');

        return $validator;
    }
}
