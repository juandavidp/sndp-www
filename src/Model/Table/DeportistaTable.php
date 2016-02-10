<?php
namespace App\Model\Table;

use App\Model\Entity\Deportistum;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Deportista Model
 *
 */
class DeportistaTable extends Table
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

        $this->table('deportista');
        $this->displayField('iddeportista');
        $this->primaryKey('iddeportista');

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
            ->add('iddeportista', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('iddeportista', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('docidentidad', 'create')
            ->notEmpty('docidentidad');

        $validator
            ->add('fecha_nacimiento', 'valid', ['rule' => 'date'])
            ->requirePresence('fecha_nacimiento', 'create')
            ->notEmpty('fecha_nacimiento');

        $validator
            ->requirePresence('lugar_nacimiento', 'create')
            ->notEmpty('lugar_nacimiento');

        $validator
            ->requirePresence('categoria', 'create')
            ->notEmpty('categoria');

        $validator
            ->add('ranking_nacional', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ranking_nacional', 'create')
            ->notEmpty('ranking_nacional');

        $validator
            ->add('ranking_internacional', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ranking_internacional');

        $validator
            ->requirePresence('tipo_asociacion', 'create')
            ->notEmpty('tipo_asociacion');

        $validator
            ->add('entidad_idEntidad', 'valid', ['rule' => 'numeric'])
            ->requirePresence('entidad_idEntidad', 'create')
            ->notEmpty('entidad_idEntidad');

        $validator
            ->add('deporte_iddeporte', 'valid', ['rule' => 'numeric'])
            ->requirePresence('deporte_iddeporte', 'create')
            ->notEmpty('deporte_iddeporte');

        return $validator;
    }
}
