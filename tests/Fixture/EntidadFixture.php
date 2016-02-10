<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EntidadFixture
 *
 */
class EntidadFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'entidad';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idEntidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'caracter' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'telefono' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'departamento' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'municipio' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'direccion' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'longitud' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => 'google maps', 'precision' => null, 'fixed' => null],
        'latitud' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'usuario_idusuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_entidad_usuario1_idx' => ['type' => 'index', 'columns' => ['usuario_idusuario'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idEntidad'], 'length' => []],
            'fk_entidad_usuario1' => ['type' => 'foreign', 'columns' => ['usuario_idusuario'], 'references' => ['usuario', 'idusuario'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
            'idEntidad' => 1,
            'nombre' => 'Lorem ipsum dolor sit amet',
            'tipo' => 'Lorem ipsum dolor sit amet',
            'caracter' => 'Lorem ipsum dolor sit amet',
            'telefono' => 1,
            'departamento' => 'Lorem ipsum dolor sit amet',
            'municipio' => 'Lorem ipsum dolor sit amet',
            'direccion' => 'Lorem ipsum dolor sit amet',
            'longitud' => 'Lorem ipsum dolor sit amet',
            'latitud' => 'Lorem ipsum dolor sit amet',
            'usuario_idusuario' => 1
        ],
    ];
}
