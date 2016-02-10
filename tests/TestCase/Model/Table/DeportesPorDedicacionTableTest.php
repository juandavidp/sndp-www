<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeportesPorDedicacionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeportesPorDedicacionTable Test Case
 */
class DeportesPorDedicacionTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.deportes_por_dedicacion'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DeportesPorDedicacion') ? [] : ['className' => 'App\Model\Table\DeportesPorDedicacionTable'];
        $this->DeportesPorDedicacion = TableRegistry::get('DeportesPorDedicacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DeportesPorDedicacion);

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
