<?php
namespace App\Model\Table;

use App\Model\Entity\DoacoesHasTipodoaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DoacoesHasTipodoacoes Model
 *
 */
class DoacoesHasTipodoacoesTable extends Table
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

        $this->table('doacoes_has_tipodoacoes');
        $this->displayField('id_doacoes_has_tipos_doacoes');
        $this->primaryKey('id_doacoes_has_tipos_doacoes');

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
            ->add('id_doacoes_has_tipos_doacoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_doacoes_has_tipos_doacoes', 'create');

        $validator
            ->add('id_doacoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_doacoes');

        $validator
            ->add('id_tipos_doacoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_tipos_doacoes');

        return $validator;
    }
}
