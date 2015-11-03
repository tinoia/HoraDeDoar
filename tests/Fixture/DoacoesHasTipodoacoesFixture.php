<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DoacoesHasTipodoacoesFixture
 *
 */
class DoacoesHasTipodoacoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_doacoes_has_tipos_doacoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_doacoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_tipos_doacoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_doacao_has_tipodoacao' => ['type' => 'index', 'columns' => ['id_doacoes'], 'length' => []],
            'FK_doacao_has_tipodoacao2' => ['type' => 'index', 'columns' => ['id_tipos_doacoes'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_doacoes_has_tipos_doacoes'], 'length' => []],
            'FK_doacao_has_tipodoacao' => ['type' => 'foreign', 'columns' => ['id_doacoes'], 'references' => ['doacoes', 'id_doacoes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_doacao_has_tipodoacao2' => ['type' => 'foreign', 'columns' => ['id_tipos_doacoes'], 'references' => ['tipos_doacoes', 'id_tipos_doacoes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_doacoes_has_tipos_doacoes' => 1,
            'id_doacoes' => 1,
            'id_tipos_doacoes' => 1
        ],
    ];
}
