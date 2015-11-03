<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstituicoesHasTiposInstituicoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstituicoesHasTiposInstituicoesTable Test Case
 */
class InstituicoesHasTiposInstituicoesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.instituicoes_has_tipos_instituicoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InstituicoesHasTiposInstituicoes') ? [] : ['className' => 'App\Model\Table\InstituicoesHasTiposInstituicoesTable'];
        $this->InstituicoesHasTiposInstituicoes = TableRegistry::get('InstituicoesHasTiposInstituicoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InstituicoesHasTiposInstituicoes);

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
