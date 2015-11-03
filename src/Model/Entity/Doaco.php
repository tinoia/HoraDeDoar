<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Doaco Entity.
 *
 * @property int $id_doacoes
 * @property float $valor_doacoes
 * @property int $confirmacao_doacoes
 * @property int $anonima_doacoes
 * @property int $id_doadores
 * @property int $id_instituicoes
 */
class Doaco extends Entity
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
        'id_doacoes' => false,
    ];
}
