<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstituicoesHasTiposInstituicoesFixture
 *
 */
class InstituicoesHasTiposInstituicoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_instituicoes_tipos_instituicoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_instituicoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_tipos_instituicoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_instituicao_has_tipoinstituicao' => ['type' => 'index', 'columns' => ['id_instituicoes'], 'length' => []],
            'FK_instituicao_has_tipoinstituicao2' => ['type' => 'index', 'columns' => ['id_tipos_instituicoes'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_instituicoes_tipos_instituicoes'], 'length' => []],
            'FK_instituicao_has_tipoinstituicao' => ['type' => 'foreign', 'columns' => ['id_instituicoes'], 'references' => ['instituicoes', 'id_instituicoes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_instituicao_has_tipoinstituicao2' => ['type' => 'foreign', 'columns' => ['id_tipos_instituicoes'], 'references' => ['tipos_instituicoes', 'id_tipos_instituicoes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_instituicoes_tipos_instituicoes' => 1,
            'id_instituicoes' => 1,
            'id_tipos_instituicoes' => 1
        ],
    ];
}
