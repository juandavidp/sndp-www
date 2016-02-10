<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetallesDedicacionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetallesDedicacionTable Test Case
 */
class DetallesDedicacionTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.detalles_dedicacion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DetallesDedicacion') ? [] : ['className' => 'App\Model\Table\DetallesDedicacionTable'];
        $this->DetallesDedicacion = TableRegistry::get('DetallesDedicacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DetallesDedicacion);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
