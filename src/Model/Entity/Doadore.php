<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Doadore Entity.
 *
 * @property int $id_doadores
 * @property string $nome_doadores
 * @property string $cpf_doadores
 * @property string $email_doadores
 * @property string $senha_doadores
 * @property int $id_enderecos
 */
class Doadore extends Entity
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
        'id_doadores' => false,
    ];
}
