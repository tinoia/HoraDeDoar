<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoacoesFixture
 *
 */
class DoacoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_doacoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'valor_doacoes' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'confirmacao_doacoes' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'anonima_doacoes' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_doadores' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_instituicoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_doacao' => ['type' => 'index', 'columns' => ['id_doadores'], 'length' => []],
            'FK_doacao2' => ['type' => 'index', 'columns' => ['id_instituicoes'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_doacoes'], 'length' => []],
            'FK_doacao' => ['type' => 'foreign', 'columns' => ['id_doadores'], 'references' => ['doadores', 'id_doadores'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_doacao2' => ['type' => 'foreign', 'columns' => ['id_instituicoes'], 'references' => ['instituicoes', 'id_instituicoes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_doacoes' => 1,
            'valor_doacoes' => 1,
            'confirmacao_doacoes' => 1,
            'anonima_doacoes' => 1,
            'id_doadores' => 1,
            'id_instituicoes' => 1
        ],
    ];
}
