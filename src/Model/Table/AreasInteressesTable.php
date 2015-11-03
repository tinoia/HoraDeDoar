<?php
namespace App\Model\Table;

use App\Model\Entity\AreasInteress;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AreasInteresses Model
 *
 */
class AreasInteressesTable extends Table
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

        $this->table('areas_interesses');
        $this->displayField('id_areas_interesses');
        $this->primaryKey('id_areas_interesses');

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
            ->add('id_areas_interesses', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_areas_interesses', 'create');

        $validator
            ->allowEmpty('areas_interesses');

        return $validator;
    }
}
