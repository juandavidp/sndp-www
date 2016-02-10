<?php
namespace App\Model\Table;

use App\Model\Entity\DeportesPorDedicacion;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DeportesPorDedicacion Model
 *
 */
class DeportesPorDedicacionTable extends Table
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

        $this->table('deportes_por_dedicacion');
        $this->displayField('iddeportes_por_recreacion');
        $this->primaryKey('iddeportes_por_recreacion');

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
            ->add('iddeportes_por_recreacion', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('iddeportes_por_recreacion', 'create');

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
