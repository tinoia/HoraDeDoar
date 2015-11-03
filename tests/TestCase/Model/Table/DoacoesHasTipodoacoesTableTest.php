<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DoacoesHasTipodoacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DoacoesHasTipodoacoesTable Test Case
 */
class DoacoesHasTipodoacoesTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.doacoes_has_tipodoacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DoacoesHasTipodoacoes') ? [] : ['className' => 'App\Model\Table\DoacoesHasTipodoacoesTable'];
        $this->DoacoesHasTipodoacoes = TableRegistry::get('DoacoesHasTipodoacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DoacoesHasTipodoacoes);

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
