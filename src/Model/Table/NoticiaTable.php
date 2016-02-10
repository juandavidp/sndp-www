<?php
namespace App\Model\Table;

use App\Model\Entity\Noticium;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Noticia Model
 *
 */
class NoticiaTable extends Table
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

        $this->table('noticia');
        $this->displayField('idNoticia');
        $this->primaryKey('idNoticia');

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
            ->add('idNoticia', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('idNoticia', 'create');

        $validator
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->add('fecha', 'valid', ['rule' => 'date'])
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->requirePresence('foto', 'create')
            ->notEmpty('foto');

        $validator
            ->requirePresence('texto_noticia', 'create')
            ->notEmpty('texto_noticia');

        $validator
            ->add('entidad_idEntidad', 'valid', ['rule' => 'numeric'])
            ->requirePresence('entidad_idEntidad', 'create')
            ->notEmpty('entidad_idEntidad');

        return $validator;
    }
}
