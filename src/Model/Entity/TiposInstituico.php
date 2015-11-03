<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TiposInstituico Entity.
 *
 * @property int $id_tipos_instituicoes
 * @property string $tipos_instituicoes
 */
class TiposInstituico extends Entity
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
        'id_tipos_instituicoes' => false,
    ];
}
