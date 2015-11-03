<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoadoresFixture
 *
 */
class DoadoresFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_doadores' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome_doadores' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cpf_doadores' => ['type' => 'string', 'length' => 11, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'email_doadores' => ['type' => 'string', 'length' => 75, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'senha_doadores' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_enderecos' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_doador' => ['type' => 'index', 'columns' => ['id_enderecos'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_doadores'], 'length' => []],
            'FK_doador' => ['type' => 'foreign', 'columns' => ['id_enderecos'], 'references' => ['enderecos', 'id_enderecos'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_doadores' => 1,
            'nome_doadores' => 'Lorem ipsum dolor sit amet',
            'cpf_doadores' => 'Lorem ips',
            'email_doadores' => 'Lorem ipsum dolor sit amet',
            'senha_doadores' => 'Lorem ipsum dolor sit amet',
            'id_enderecos' => 1
        ],
    ];
}
