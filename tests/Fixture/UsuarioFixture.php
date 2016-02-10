<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usuario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idusuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cedula' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'password' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idusuario'], 'length' => []],
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
            'idusuario' => 1,
            'nombre' => 'Lorem ipsum dolor sit amet',
            'cedula' => 1,
            'password' => 'Lorem ipsum dolor sit amet',
            'tipo' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
