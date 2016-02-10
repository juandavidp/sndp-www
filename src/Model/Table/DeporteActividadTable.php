<?php
namespace App\Model\Table;

use App\Model\Entity\DeporteActividad;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DeporteActividad Model
 *
 */
class DeporteActividadTable extends Table
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

        $this->table('deporte_actividad');
        $this->displayField('iddeporte');
        $this->primaryKey('iddeporte');

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
            ->add('iddeporte', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('iddeporte', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        return $validator;
    }
}
