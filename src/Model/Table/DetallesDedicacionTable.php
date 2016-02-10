<?php
namespace App\Model\Table;

use App\Model\Entity\DetallesDedicacion;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DetallesDedicacion Model
 *
 */
class DetallesDedicacionTable extends Table
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

        $this->table('detalles_dedicacion');
        $this->displayField('id_detalles_dedicacion');
        $this->primaryKey('id_detalles_dedicacion');

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
            ->add('id_detalles_dedicacion', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_detalles_dedicacion', 'create');

        $validator
            ->add('dedicacion_iddedicacion', 'valid', ['rule' => 'numeric'])
            ->requirePresence('dedicacion_iddedicacion', 'create')
            ->notEmpty('dedicacion_iddedicacion');

        $validator
            ->add('entidad_idEntidad', 'valid', ['rule' => 'numeric'])
            ->requirePresence('entidad_idEntidad', 'create')
            ->notEmpty('entidad_idEntidad');

        return $validator;
    }
}
