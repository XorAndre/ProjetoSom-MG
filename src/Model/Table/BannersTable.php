<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Banners Model
 *
 * @property \App\Model\Table\PlacesTable|\Cake\ORM\Association\BelongsTo $Places
 *
 * @method \App\Model\Entity\Banner get($primaryKey, $options = [])
 * @method \App\Model\Entity\Banner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Banner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Banner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Banner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Banner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Banner findOrCreate($search, callable $callback = null, $options = [])
 */
class BannersTable extends Table
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

        $this->setTable('banners');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Places', [
            'foreignKey' => 'place_id',
            'joinType' => 'INNER'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'name' => 
            [
                'path' => 'webroot{DS}img{DS}{model}{DS}',
                'fields' => [
                    'dir' => 'path',
                ],
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    return [
                        $path . $entity->{$field},
                        $path . 'thumbnailtopo-' . $entity->{$field},
                        $path . 'thumbnaillateral-' . $entity->{$field}
                    ];
                },
                'transformer' =>  function ($table, $entity, $data, $field, $settings) {
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);

                        // Store the thumbnail in a temporary file
                    $tmptopo = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;

                        // Use the Imagine library to DO THE THING
                    $sizetopo = new \Imagine\Image\Box(700, 320);
                    $modetopo = \Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;
                    $imaginetopo = new \Imagine\Gd\Imagine();
                        // Save that modified file to our temp file
                    $imaginetopo->open($data['tmp_name'])
                    ->thumbnail($sizetopo, $modetopo)
                    ->save($tmptopo);

                        // Store the thumbnail in a temporary file
                    $tmplateral = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;

                        // Use the Imagine library to DO THE THING
                    $sizelateral = new \Imagine\Image\Box(400, 300);
                    $modelateral = \Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;
                    $imaginelateral = new \Imagine\Gd\Imagine();

                        // Save that modified file to our temp file
                    $imaginelateral->open($data['tmp_name'])
                    ->thumbnail($sizelateral, $modelateral)
                    ->save($tmplateral);

                        // Now return the original *and* the thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmptopo => 'thumbnailtopo-' . $data['name'],
                        $tmplateral => 'thumbnaillateral-' . $data['name'],
                    ];
                },
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
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->numeric('valor')
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');        
            $validator
            ->notEmpty('name');


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
        $rules->add($rules->existsIn(['place_id'], 'Places'));

        return $rules;
    }
}
