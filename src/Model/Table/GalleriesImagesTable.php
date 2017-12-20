<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GalleriesImages Model
 *
 * @property \App\Model\Table\GalleriesTable|\Cake\ORM\Association\BelongsTo $Galleries
 * @property \App\Model\Table\ImagesTable|\Cake\ORM\Association\BelongsTo $Images
 *
 * @method \App\Model\Entity\GalleriesImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\GalleriesImage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GalleriesImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GalleriesImage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GalleriesImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GalleriesImage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GalleriesImage findOrCreate($search, callable $callback = null, $options = [])
 */
class GalleriesImagesTable extends Table
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

        $this->setTable('galleries_images');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Galleries', [
            'foreignKey' => 'gallery_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['gallery_id'], 'Galleries'));
        $rules->add($rules->existsIn(['image_id'], 'Images'));

        return $rules;
    }
}
