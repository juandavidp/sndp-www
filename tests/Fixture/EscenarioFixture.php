<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EscenarioFixture
 *
 */
class EscenarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'escenario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idescenario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'actividad_deporte' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'capacidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estado_escala' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estado_comentario' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'entidad_idEntidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'departamento' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'municipio' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'direccion' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'longitud' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'latitud' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'capacidad_publico' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'capacidad_deportistas' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dedicacion_iddedicacion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_escenario_entidad1_idx' => ['type' => 'index', 'columns' => ['entidad_idEntidad'], 'length' => []],
            'fk_escenario_dedicacion1_idx' => ['type' => 'index', 'columns' => ['dedicacion_iddedicacion'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idescenario'], 'length' => []],
            'fk_escenario_dedicacion1' => ['type' => 'foreign', 'columns' => ['dedicacion_iddedicacion'], 'references' => ['dedicacion', 'iddedicacion'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_escenario_entidad1' => ['type' => 'foreign', 'columns' => ['entidad_idEntidad'], 'references' => ['entidad', 'idEntidad'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idescenario' => 1,
            'nombre' => 'Lorem ipsum dolor sit amet',
            'actividad_deporte' => 'Lorem ipsum dolor sit amet',
            'capacidad' => 1,
            'estado_escala' => 1,
            'estado_comentario' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'entidad_idEntidad' => 1,
            'departamento' => 'Lorem ipsum dolor sit amet',
            'municipio' => 'Lorem ipsum dolor sit amet',
            'direccion' => 'Lorem ipsum dolor sit amet',
            'longitud' => 'Lorem ipsum dolor sit amet',
            'latitud' => 'Lorem ipsum dolor sit amet',
            'capacidad_publico' => 1,
            'capacidad_deportistas' => 1,
            'dedicacion_iddedicacion' => 1
        ],
    ];
}
