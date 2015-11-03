<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstituicoesHasAreasInteressesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstituicoesHasAreasInteressesTable Test Case
 */
class InstituicoesHasAreasInteressesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.instituicoes_has_areas_interesses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InstituicoesHasAreasInteresses') ? [] : ['className' => 'App\Model\Table\InstituicoesHasAreasInteressesTable'];
        $this->InstituicoesHasAreasInteresses = TableRegistry::get('InstituicoesHasAreasInteresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InstituicoesHasAreasInteresses);

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
