<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CodigopaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CodigopaisTable Test Case
 */
class CodigopaisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CodigopaisTable
     */
    public $Codigopais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.codigopais'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Codigopais') ? [] : ['className' => CodigopaisTable::class];
        $this->Codigopais = TableRegistry::get('Codigopais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Codigopais);

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
