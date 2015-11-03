<?php
namespace App\Model\Table;

use App\Model\Entity\InstituicoesHasAreasInteress;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InstituicoesHasAreasInteresses Model
 *
 */
class InstituicoesHasAreasInteressesTable extends Table
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

        $this->table('instituicoes_has_areas_interesses');
        $this->displayField('id_instituicoes_has_areas_interesses');
        $this->primaryKey('id_instituicoes_has_areas_interesses');

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
            ->add('id_instituicoes_has_areas_interesses', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_instituicoes_has_areas_interesses', 'create');

        $validator
            ->add('id_instituicoes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_instituicoes');

        $validator
            ->add('id_areas_interesses', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_areas_interesses');

        return $validator;
    }
}
