<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstituicoesHasAreasAtuacoesFixture
 *
 */
class InstituicoesHasAreasAtuacoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_instituicoes_has_areas_atuacoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_instituicoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_areas_atuacoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_instituicao_has_areaatuacao' => ['type' => 'index', 'columns' => ['id_instituicoes'], 'length' => []],
            'FK_instituicao_has_areaatuacao2' => ['type' => 'index', 'columns' => ['id_areas_atuacoes'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_instituicoes_has_areas_atuacoes'], 'length' => []],
            'FK_instituicao_has_areaatuacao' => ['type' => 'foreign', 'columns' => ['id_instituicoes'], 'references' => ['instituicoes', 'id_instituicoes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_instituicoes_has_areas_atuacoes' => ['type' => 'foreign', 'columns' => ['id_areas_atuacoes'], 'references' => ['areas_atuacoes', 'id_areas_atuacoes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_instituicoes_has_areas_atuacoes' => 1,
            'id_instituicoes' => 1,
            'id_areas_atuacoes' => 1
        ],
    ];
}
