<?php
namespace App\Model\Table;

use App\Model\Entity\Endereco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enderecos Model
 *
 */
class EnderecosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('enderecos');
        $this->displayField('id_enderecos');
        $this->primaryKey('id_enderecos');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id_enderecos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_enderecos', 'create');

        $validator
            ->allowEmpty('cep_enderecos');

        $validator
            ->allowEmpty('estado_enderecos');

        $validator
            ->allowEmpty('cidade_enderecos');

        $validator
            ->allowEmpty('bairro_enderecos');

        $validator
            ->allowEmpty('rua_enderecos');

        $validator
            ->allowEmpty('numero_enderecos');

        $validator
            ->allowEmpty('complemento_enderecos');

        $validator
            ->allowEmpty('mapa_enderecos');

        return $validator;
    }
}
