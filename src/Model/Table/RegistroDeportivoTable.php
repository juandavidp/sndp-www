<?php
namespace App\Model\Table;

use App\Model\Entity\RegistroDeportivo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RegistroDeportivo Model
 *
 */
class RegistroDeportivoTable extends Table
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

        $this->table('registro_deportivo');
        $this->displayField('idregistro_deportivo');
        $this->primaryKey('idregistro_deportivo');

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
            ->add('idregistro_deportivo', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('idregistro_deportivo', 'create');

        $validator
            ->requirePresence('reconocimiento', 'create')
            ->notEmpty('reconocimiento');

        $validator
            ->add('marca', 'valid', ['rule' => 'numeric'])
            ->requirePresence('marca', 'create')
            ->notEmpty('marca');

        $validator
            ->add('deportista_iddeportista', 'valid', ['rule' => 'numeric'])
            ->requirePresence('deportista_iddeportista', 'create')
            ->notEmpty('deportista_iddeportista');

        $validator
            ->allowEmpty('info');

        return $validator;
    }
}
