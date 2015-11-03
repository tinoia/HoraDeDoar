<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnderecosFixture
 *
 */
class EnderecosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_enderecos' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cep_enderecos' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'estado_enderecos' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cidade_enderecos' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'bairro_enderecos' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'rua_enderecos' => ['type' => 'string', 'length' => 75, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'numero_enderecos' => ['type' => 'string', 'length' => 5, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'complemento_enderecos' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'mapa_endereços' => ['type' => 'string', 'length' => 800, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_enderecos'], 'length' => []],
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
            'id_enderecos' => 1,
            'cep_enderecos' => 'Lorem ',
            'estado_enderecos' => 'Lorem ipsum dolor sit amet',
            'cidade_enderecos' => 'Lorem ipsum dolor sit amet',
            'bairro_enderecos' => 'Lorem ipsum dolor sit amet',
            'rua_enderecos' => 'Lorem ipsum dolor sit amet',
            'numero_enderecos' => 'Lor',
            'complemento_enderecos' => 'Lorem ipsum dolor sit amet',
            'mapa_endereços' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
