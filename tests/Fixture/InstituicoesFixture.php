<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstituicoesFixture
 *
 */
class InstituicoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_instituicoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome_instituicoes' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'descricao_instituicoes' => ['type' => 'string', 'length' => 400, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'conta_corrente_instituicoes' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cnpj_instituicoes' => ['type' => 'integer', 'length' => 14, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'telefone_instituicoes' => ['type' => 'string', 'length' => 11, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ano_fundacao_instituicoes' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'numero_funcionario_instituicoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'numero_voluntario_instituicoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'projeto_instituicoes' => ['type' => 'string', 'length' => 300, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'email_instituicoes' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'senha_instituicoes' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_enderecos' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_intituicao' => ['type' => 'index', 'columns' => ['id_enderecos'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_instituicoes'], 'length' => []],
            'FK_intituicao' => ['type' => 'foreign', 'columns' => ['id_enderecos'], 'references' => ['enderecos', 'id_enderecos'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_instituicoes' => 1,
            'nome_instituicoes' => 'Lorem ipsum dolor sit amet',
            'descricao_instituicoes' => 'Lorem ipsum dolor sit amet',
            'conta_corrente_instituicoes' => 'Lorem ipsu',
            'cnpj_instituicoes' => 1,
            'telefone_instituicoes' => 'Lorem ips',
            'ano_fundacao_instituicoes' => 1,
            'numero_funcionario_instituicoes' => 1,
            'numero_voluntario_instituicoes' => 1,
            'projeto_instituicoes' => 'Lorem ipsum dolor sit amet',
            'email_instituicoes' => 'Lorem ipsum dolor sit amet',
            'senha_instituicoes' => 'Lorem ipsum dolor sit amet',
            'id_enderecos' => 1
        ],
    ];
}
