<?php
namespace App\Model\Table;

use App\Model\Entity\Entidad;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entidad Model
 *
 */
class EntidadTable extends Table
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

        $this->table('entidad');
        $this->displayField('idEntidad');
        $this->primaryKey('idEntidad');

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
            ->add('idEntidad', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('idEntidad', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->requirePresence('caracter', 'create')
            ->notEmpty('caracter');

        $validator
            ->add('telefono', 'valid', ['rule' => 'numeric'])
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

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
            ->add('usuario_idusuario', 'valid', ['rule' => 'numeric'])
            ->requirePresence('usuario_idusuario', 'create')
            ->notEmpty('usuario_idusuario');

        return $validator;
    }
}
