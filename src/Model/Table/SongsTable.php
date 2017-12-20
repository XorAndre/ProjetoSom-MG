<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Songs Model
 *
 * @property \App\Model\Table\AlbumsTable|\Cake\ORM\Association\BelongsTo $Albums
 *
 * @method \App\Model\Entity\Song get($primaryKey, $options = [])
 * @method \App\Model\Entity\Song newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Song[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Song|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Song patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Song[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Song findOrCreate($search, callable $callback = null, $options = [])
 */
class SongsTable extends Table
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

        $this->setTable('songs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Albums', [
            'foreignKey' => 'album_id',
            'joinType' => 'INNER'
        ]);
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'file' => 
                [
                    'path' => 'webroot{DS}files{DS}{model}{DS}{microtime}{time}',
                    'fields' => [
                        'dir' => 'path',
                    ],

                    'keepFilesOnDelete' => false
                ]
             ]
        );
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator->provider('upload', \Josegonzalez\Upload\Validation\UploadValidation::class);
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator->add('name', 'validExtension', [
                    'rule' => ['extension',['mp3']],
                    'message' => __('These files extension are allowed: .mp3')
                ]);

        $validator->add('name', 'fileBelowMaxSize', [
            'rule' => ['isBelowMaxSize', 10240],
            'message' => 'This file is too large',
            'provider' => 'upload'
         ]);
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
        $rules->add($rules->existsIn(['album_id'], 'Albums'));

        return $rules;
    }
}
