<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccessItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccessItemsTable Test Case
 */
class AccessItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccessItemsTable
     */
    public $AccessItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AccessItems',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AccessItems') ? [] : ['className' => AccessItemsTable::class];
        $this->AccessItems = TableRegistry::getTableLocator()->get('AccessItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccessItems);

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
