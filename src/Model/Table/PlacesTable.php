<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Places Model
 *
 * @property \App\Model\Table\BannersTable|\Cake\ORM\Association\HasMany $Banners
 *
 * @method \App\Model\Entity\Place get($primaryKey, $options = [])
 * @method \App\Model\Entity\Place newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Place[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Place|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Place patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Place[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Place findOrCreate($search, callable $callback = null, $options = [])
 */
class PlacesTable extends Table
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

        $this->setTable('places');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Banners', [
            'foreignKey' => 'place_id'
        ]);
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

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
