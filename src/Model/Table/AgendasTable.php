<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agendas Model
 *
 * @property \App\Model\Table\ImagesTable|\Cake\ORM\Association\BelongsTo $Images
 *
 * @method \App\Model\Entity\Agenda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agenda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agenda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agenda|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agenda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agenda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agenda findOrCreate($search, callable $callback = null, $options = [])
 */
class AgendasTable extends Table
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

        $this->setTable('agendas');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Images', [
            'foreignKey' => 'image_id',
            'joinType' => 'INNER'
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
            ->scalar('title')
            ->maxLength('title', 150)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('text')
            ->requirePresence('text', 'create')
            ->notEmpty('text');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['image_id'], 'Images'));

        return $rules;
    }
}
