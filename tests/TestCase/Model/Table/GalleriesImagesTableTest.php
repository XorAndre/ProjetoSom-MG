<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GalleriesImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GalleriesImagesTable Test Case
 */
class GalleriesImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GalleriesImagesTable
     */
    public $GalleriesImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.galleries_images',
        'app.galleries',
        'app.images',
        'app.agendas',
        'app.news',
        'app.users',
        'app.groups'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GalleriesImages') ? [] : ['className' => GalleriesImagesTable::class];
        $this->GalleriesImages = TableRegistry::get('GalleriesImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GalleriesImages);

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
