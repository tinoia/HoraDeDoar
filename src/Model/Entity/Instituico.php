<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Instituico Entity.
 *
 * @property int $id_instituicoes
 * @property string $nome_instituicoes
 * @property string $descricao_instituicoes
 * @property string $conta_corrente_instituicoes
 * @property int $cnpj_instituicoes
 * @property string $telefone_instituicoes
 * @property int $ano_fundacao_instituicoes
 * @property int $numero_funcionario_instituicoes
 * @property int $numero_voluntario_instituicoes
 * @property string $projeto_instituicoes
 * @property string $email_instituicoes
 * @property string $senha_instituicoes
 * @property int $id_enderecos
 */
class Instituico extends Entity
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
        'id_instituicoes' => false,
    ];
}
