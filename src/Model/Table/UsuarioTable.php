<?php
namespace App\Model\Table;

use App\Model\Entity\Usuario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuario Model
 *
 */
class UsuarioTable extends Table
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

        $this->table('usuario');
        $this->displayField('idusuario');
        $this->primaryKey('idusuario');

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
            ->add('idusuario', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('idusuario', 'create');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->add('cedula', 'valid', ['rule' => 'numeric'])
            ->requirePresence('cedula', 'create')
            ->notEmpty('cedula');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        return $validator;
    }
}
