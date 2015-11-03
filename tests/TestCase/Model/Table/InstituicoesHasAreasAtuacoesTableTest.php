<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstituicoesHasAreasAtuacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstituicoesHasAreasAtuacoesTable Test Case
 */
class InstituicoesHasAreasAtuacoesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.instituicoes_has_areas_atuacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InstituicoesHasAreasAtuacoes') ? [] : ['className' => 'App\Model\Table\InstituicoesHasAreasAtuacoesTable'];
        $this->InstituicoesHasAreasAtuacoes = TableRegistry::get('InstituicoesHasAreasAtuacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InstituicoesHasAreasAtuacoes);

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
