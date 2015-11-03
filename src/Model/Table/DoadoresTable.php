<?php
namespace App\Model\Table;

use App\Model\Entity\Doadore;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Doadores Model
 *
 */
class DoadoresTable extends Table
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

        $this->table('doadores');
        $this->displayField('id_doadores');
        $this->primaryKey('id_doadores');

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
            ->add('id_doadores', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_doadores', 'create');

        $validator
            ->allowEmpty('nome_doadores');

        $validator
            ->allowEmpty('cpf_doadores');

        $validator
            ->allowEmpty('email_doadores');

        $validator
            ->allowEmpty('senha_doadores');

        $validator
            ->add('id_enderecos', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_enderecos');

        return $validator;
    }
}
