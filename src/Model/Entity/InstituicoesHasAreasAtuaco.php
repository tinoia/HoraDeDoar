<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InstituicoesHasAreasAtuaco Entity.
 *
 * @property int $id_instituicoes_has_areas_atuacoes
 * @property int $id_instituicoes
 * @property int $id_areas_atuacoes
 */
class InstituicoesHasAreasAtuaco extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id_instituicoes_has_areas_atuacoes' => false,
    ];
}
