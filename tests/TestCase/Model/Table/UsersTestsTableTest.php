<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTestsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTestsTable Test Case
 */
class UsersTestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTestsTable
     */
    public $UsersTests;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UsersTests',
        'app.Users',
        'app.Tests',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UsersTests') ? [] : ['className' => UsersTestsTable::class];
        $this->UsersTests = TableRegistry::getTableLocator()->get('UsersTests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersTests);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
