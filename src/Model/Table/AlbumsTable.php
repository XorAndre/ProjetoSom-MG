<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Albums Model
 *
 * @property \App\Model\Table\SongsTable|\Cake\ORM\Association\HasMany $Songs
 *
 * @method \App\Model\Entity\Album get($primaryKey, $options = [])
 * @method \App\Model\Entity\Album newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Album[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Album|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Album patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Album[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Album findOrCreate($search, callable $callback = null, $options = [])
 */
class AlbumsTable extends Table
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

        $this->setTable('albums');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Songs', [
            'foreignKey' => 'album_id'
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
            ->scalar('nome')
            ->maxLength('nome', 100)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        return $validator;
    }

        function deleteUnlinkeds(){
        $albums = $this->find('all')
        ->select(['id']);
        $unlinkeds = $this->Songs->find()
        ->where(['Songs.album_id NOT IN' => $albums])
        ->select(['Songs.path', 'Songs.name', 'Songs.id']);
        foreach ($unlinkeds as $key => $value) {
            $dir = "../".$value['path'];
            if (is_dir($dir)) { 
               $objects = scandir($dir); 
               foreach ($objects as $object) { 
                 if ($object != "." && $object != "..") { 
                   if (is_dir($dir."/".$object))
                     rrmdir($dir."/".$object);
                 else
                     unlink($dir."/".$object); 
             } 
         }
         rmdir($dir); 
     } 
     $songToDelete = $this->Songs->get($value['id']);
     $this->Songs->delete($songToDelete);
 }
}
}
