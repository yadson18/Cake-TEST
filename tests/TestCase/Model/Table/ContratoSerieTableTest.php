<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratoSerieTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratoSerieTable Test Case
 */
class ContratoSerieTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratoSerieTable
     */
    public $ContratoSerie;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contrato_serie'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContratoSerie') ? [] : ['className' => ContratoSerieTable::class];
        $this->ContratoSerie = TableRegistry::get('ContratoSerie', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContratoSerie);

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
