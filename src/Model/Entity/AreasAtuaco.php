<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AreasAtuaco Entity.
 *
 * @property int $id_areas_atuacoes
 * @property string $areas_atuacoes
 */
class AreasAtuaco extends Entity
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
        'id_areas_atuacoes' => false,
    ];
}
