<?php
namespace App\Model\Table;

use App\Model\Entity\TiposDoaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TiposDoacoes Model
 *
 */
class TiposDoacoesTable extends Table
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

        $this->table('tipos_doacoes');
        $this->displayField('id_tipos_doacoes');
        $this->primaryKey('id_tipos_doacoes');

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
            ->add('id_tipos_doacoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_tipos_doacoes', 'create');

        $validator
            ->allowEmpty('tipos_doacoes');

        return $validator;
    }
}
