<?php
namespace App\Model\Table;

use App\Model\Entity\InstituicoesHasTiposInstituico;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InstituicoesHasTiposInstituicoes Model
 *
 */
class InstituicoesHasTiposInstituicoesTable extends Table
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

        $this->table('instituicoes_has_tipos_instituicoes');
        $this->displayField('id_instituicoes_tipos_instituicoes');
        $this->primaryKey('id_instituicoes_tipos_instituicoes');

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
            ->add('id_instituicoes_tipos_instituicoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_instituicoes_tipos_instituicoes', 'create');

        $validator
            ->add('id_instituicoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_instituicoes');

        $validator
            ->add('id_tipos_instituicoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_tipos_instituicoes');

        return $validator;
    }
}
