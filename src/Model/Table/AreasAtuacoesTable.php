<?php
namespace App\Model\Table;

use App\Model\Entity\AreasAtuaco;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AreasAtuacoes Model
 *
 */
class AreasAtuacoesTable extends Table
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

        $this->table('areas_atuacoes');
        $this->displayField('id_areas_atuacoes');
        $this->primaryKey('id_areas_atuacoes');

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
            ->add('id_areas_atuacoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_areas_atuacoes', 'create');

        $validator
            ->allowEmpty('areas_atuacoes');

        return $validator;
    }
}
