<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FocusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FocusesTable Test Case
 */
class FocusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FocusesTable
     */
    public $Focuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.focuses',
        'app.categories',
        'app.images',
        'app.agendas',
        'app.news',
        'app.users',
        'app.groups',
        'app.galleries',
        'app.galleries_images',
        'app.galleries_galleries_images'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Focuses') ? [] : ['className' => FocusesTable::class];
        $this->Focuses = TableRegistry::get('Focuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Focuses);

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
