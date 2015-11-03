<?php
namespace App\Model\Table;

use App\Model\Entity\Instituico;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Instituicoes Model
 *
 */
class InstituicoesTable extends Table
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

        $this->table('instituicoes');
        $this->displayField('id_instituicoes');
        $this->primaryKey('id_instituicoes');

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
            ->add('id_instituicoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_instituicoes', 'create');

        $validator
            ->allowEmpty('nome_instituicoes');

        $validator
            ->allowEmpty('descricao_instituicoes');

        $validator
            ->allowEmpty('conta_corrente_instituicoes');

        $validator
            ->add('cnpj_instituicoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('cnpj_instituicoes');

        $validator
            ->allowEmpty('telefone_instituicoes');

        $validator
            ->add('ano_fundacao_instituicoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ano_fundacao_instituicoes');

        $validator
            ->add('numero_funcionario_instituicoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('numero_funcionario_instituicoes');

        $validator
            ->add('numero_voluntario_instituicoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('numero_voluntario_instituicoes');

        $validator
            ->allowEmpty('projeto_instituicoes');

        $validator
            ->allowEmpty('email_instituicoes');

        $validator
            ->allowEmpty('senha_instituicoes');

        $validator
            ->add('id_enderecos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_enderecos');

        return $validator;
    }
}
