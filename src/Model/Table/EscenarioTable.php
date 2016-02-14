<?php
namespace App\Model\Table;

use App\Model\Entity\Escenario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Escenario Model
 *
 */
class EscenarioTable extends Table
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

        $this->table('escenario');
        $this->displayField('idescenario');
        $this->primaryKey('idescenario');

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
            ->add('idescenario', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('idescenario', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->add('capacidad', 'valid', ['rule' => 'numeric'])
            ->requirePresence('capacidad', 'create')
            ->notEmpty('capacidad');

        $validator
            ->add('estado_escala', 'valid', ['rule' => 'numeric'])
            ->requirePresence('estado_escala', 'create')
            ->notEmpty('estado_escala');

        $validator
            ->requirePresence('estado_comentario', 'create')
            ->notEmpty('estado_comentario');

        $validator
            ->add('entidad_idEntidad', 'valid', ['rule' => 'numeric'])
            ->requirePresence('entidad_idEntidad', 'create')
            ->notEmpty('entidad_idEntidad');

        $validator
            ->requirePresence('departamento', 'create')
            ->notEmpty('departamento');

        $validator
            ->requirePresence('municipio', 'create')
            ->notEmpty('municipio');

        $validator
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');

        $validator
            ->requirePresence('longitud', 'create')
            ->notEmpty('longitud');

        $validator
            ->requirePresence('latitud', 'create')
            ->notEmpty('latitud');

        $validator
            ->add('capacidad_publico', 'valid', ['rule' => 'numeric'])
            ->requirePresence('capacidad_publico', 'create')
            ->notEmpty('capacidad_publico');

        $validator
            ->add('capacidad_deportistas', 'valid', ['rule' => 'numeric'])
            ->requirePresence('capacidad_deportistas', 'create')
            ->notEmpty('capacidad_deportistas');

        $validator
            ->add('dedicacion_iddedicacion', 'valid', ['rule' => 'numeric'])
            ->requirePresence('dedicacion_iddedicacion', 'create')
            ->notEmpty('dedicacion_iddedicacion');

        $validator
            ->add('deporte_iddeporte', 'valid', ['rule' => 'numeric'])
            ->requirePresence('deporte_iddeporte', 'create')
            ->notEmpty('deporte_iddeporte');

        return $validator;
    }

}
