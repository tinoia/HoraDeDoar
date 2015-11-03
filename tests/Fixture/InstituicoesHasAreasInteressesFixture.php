<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstituicoesHasAreasInteressesFixture
 *
 */
class InstituicoesHasAreasInteressesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_instituicoes_has_areas_interesses' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_instituicoes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_areas_interesses' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_instituicao_has_areainteresse' => ['type' => 'index', 'columns' => ['id_instituicoes'], 'length' => []],
            'FK_instituicao_has_areainteresse2' => ['type' => 'index', 'columns' => ['id_areas_interesses'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_instituicoes_has_areas_interesses'], 'length' => []],
            'FK_instituicao_has_areainteresse' => ['type' => 'foreign', 'columns' => ['id_instituicoes'], 'references' => ['instituicoes', 'id_instituicoes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_instituicao_has_areainteresse2' => ['type' => 'foreign', 'columns' => ['id_areas_interesses'], 'references' => ['areas_interesses', 'id_areas_interesses'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_instituicoes_has_areas_interesses' => 1,
            'id_instituicoes' => 1,
            'id_areas_interesses' => 1
        ],
    ];
}
