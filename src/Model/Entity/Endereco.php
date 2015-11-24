<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Endereco Entity.
 *
 * @property int $id_enderecos
 * @property string $cep_enderecos
 * @property string $estado_enderecos
 * @property string $cidade_enderecos
 * @property string $bairro_enderecos
 * @property string $rua_enderecos
 * @property string $numero_enderecos
 * @property string $complemento_enderecos
 * @property string $mapa_enderecos
 */
class Endereco extends Entity
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
        'id_enderecos' => false,
    ];
}
