<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratoTable Test Case
 */
class ContratoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratoTable
     */
    public $Contrato;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contrato'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Contrato') ? [] : ['className' => ContratoTable::class];
        $this->Contrato = TableRegistry::get('Contrato', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contrato);

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
