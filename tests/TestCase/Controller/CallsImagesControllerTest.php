<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CallsImagesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CallsImagesController Test Case
 */
class CallsImagesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.calls_images',
        'app.calls',
        'app.users',
        'app.notices',
        'app.notices_users',
        'app.roles',
        'app.notices_roles',
        'app.roles_users',
        'app.calls_categories',
        'app.calls_responses'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
