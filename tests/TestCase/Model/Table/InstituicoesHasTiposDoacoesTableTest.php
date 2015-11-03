<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstituicoesHasTiposDoacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstituicoesHasTiposDoacoesTable Test Case
 */
class InstituicoesHasTiposDoacoesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.instituicoes_has_tipos_doacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InstituicoesHasTiposDoacoes') ? [] : ['className' => 'App\Model\Table\InstituicoesHasTiposDoacoesTable'];
        $this->InstituicoesHasTiposDoacoes = TableRegistry::get('InstituicoesHasTiposDoacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InstituicoesHasTiposDoacoes);

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
