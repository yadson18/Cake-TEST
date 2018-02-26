<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IbgeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IbgeTable Test Case
 */
class IbgeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IbgeTable
     */
    public $Ibge;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ibge'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ibge') ? [] : ['className' => IbgeTable::class];
        $this->Ibge = TableRegistry::get('Ibge', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ibge);

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
