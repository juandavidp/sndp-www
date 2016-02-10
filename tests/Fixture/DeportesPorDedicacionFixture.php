<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DeportesPorDedicacionFixture
 *
 */
class DeportesPorDedicacionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'deportes_por_dedicacion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'iddeportes_por_recreacion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'dedicacion_iddedicacion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'deporte_iddeporte' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_deportes_por_recreacion_dedicacion1_idx' => ['type' => 'index', 'columns' => ['dedicacion_iddedicacion'], 'length' => []],
            'fk_deportes_por_recreacion_deporte1_idx' => ['type' => 'index', 'columns' => ['deporte_iddeporte'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['iddeportes_por_recreacion'], 'length' => []],
            'fk_deportes_por_recreacion_dedicacion1' => ['type' => 'foreign', 'columns' => ['dedicacion_iddedicacion'], 'references' => ['dedicacion', 'iddedicacion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_deportes_por_recreacion_deporte1' => ['type' => 'foreign', 'columns' => ['deporte_iddeporte'], 'references' => ['deporte_actividad', 'iddeporte'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'iddeportes_por_recreacion' => 1,
            'dedicacion_iddedicacion' => 1,
            'deporte_iddeporte' => 1
        ],
    ];
}
