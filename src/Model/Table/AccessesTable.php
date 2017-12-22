<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Accesses Model
 *
 * @method \App\Model\Entity\Access get($primaryKey, $options = [])
 * @method \App\Model\Entity\Access newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Access[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Access|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Access patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Access[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Access findOrCreate($search, callable $callback = null, $options = [])
 */
class AccessesTable extends Table
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

        $this->setTable('accesses');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');
        return $validator;
    }
}
