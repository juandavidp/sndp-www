<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NoticiaFixture
 *
 */
class NoticiaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'noticia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idNoticia' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'titulo' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'foto' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'texto_noticia' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'entidad_idEntidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_noticia_entidad1_idx' => ['type' => 'index', 'columns' => ['entidad_idEntidad'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idNoticia'], 'length' => []],
            'fk_noticia_entidad1' => ['type' => 'foreign', 'columns' => ['entidad_idEntidad'], 'references' => ['entidad', 'idEntidad'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'idNoticia' => 1,
            'titulo' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2016-01-16',
            'foto' => 'Lorem ipsum dolor sit amet',
            'texto_noticia' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'entidad_idEntidad' => 1
        ],
    ];
}
