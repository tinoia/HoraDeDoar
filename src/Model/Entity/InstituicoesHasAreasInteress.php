<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InstituicoesHasAreasInteress Entity.
 *
 * @property int $id_instituicoes_has_areas_interesses
 * @property int $id_instituicoes
 * @property int $id_areas_interesses
 */
class InstituicoesHasAreasInteress extends Entity
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
        'id_instituicoes_has_areas_interesses' => false,
    ];
}
