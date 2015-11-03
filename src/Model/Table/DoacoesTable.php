<?php
namespace App\Model\Table;

use App\Model\Entity\Doaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Doacoes Model
 *
 */
class DoacoesTable extends Table
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

        $this->table('doacoes');
        $this->displayField('id_doacoes');
        $this->primaryKey('id_doacoes');

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
            ->add('id_doacoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_doacoes', 'create');

        $validator
            ->add('valor_doacoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('valor_doacoes');

        $validator
            ->add('confirmacao_doacoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('confirmacao_doacoes');

        $validator
            ->add('anonima_doacoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('anonima_doacoes');

        $validator
            ->add('id_doadores', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_doadores');

        $validator
            ->add('id_instituicoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_instituicoes');

        return $validator;
    }
}
