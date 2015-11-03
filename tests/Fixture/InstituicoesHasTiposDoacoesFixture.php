<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstituicoesHasTiposDoacoesFixture
 *
 */
class InstituicoesHasTiposDoacoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_instituicoes_tipos_doacoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_instituicoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_tipos_doacoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_instituicao_has_tipodoacao2' => ['type' => 'index', 'columns' => ['id_tipos_doacoes'], 'length' => []],
            'FK_instituicao_has_tipodoacao' => ['type' => 'index', 'columns' => ['id_instituicoes'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_instituicoes_tipos_doacoes'], 'length' => []],
            'FK_instituicao_has_tipodoacao' => ['type' => 'foreign', 'columns' => ['id_instituicoes'], 'references' => ['instituicoes', 'id_instituicoes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_instituicao_has_tipodoacao2' => ['type' => 'foreign', 'columns' => ['id_tipos_doacoes'], 'references' => ['tipos_doacoes', 'id_tipos_doacoes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_instituicoes_tipos_doacoes' => 1,
            'id_instituicoes' => 1,
            'id_tipos_doacoes' => 1
        ],
    ];
}
