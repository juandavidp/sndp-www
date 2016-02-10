<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetallesDedicacionFixture
 *
 */
class DetallesDedicacionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'detalles_dedicacion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_detalles_dedicacion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'dedicacion_iddedicacion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'entidad_idEntidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_detalles_dedicacion_dedicacion1_idx' => ['type' => 'index', 'columns' => ['dedicacion_iddedicacion'], 'length' => []],
            'fk_detalles_dedicacion_entidad1_idx' => ['type' => 'index', 'columns' => ['entidad_idEntidad'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_detalles_dedicacion'], 'length' => []],
            'fk_detalles_dedicacion_dedicacion1' => ['type' => 'foreign', 'columns' => ['dedicacion_iddedicacion'], 'references' => ['dedicacion', 'iddedicacion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_detalles_dedicacion_entidad1' => ['type' => 'foreign', 'columns' => ['entidad_idEntidad'], 'references' => ['entidad', 'idEntidad'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_detalles_dedicacion' => 1,
            'dedicacion_iddedicacion' => 1,
            'entidad_idEntidad' => 1
        ],
    ];
}
