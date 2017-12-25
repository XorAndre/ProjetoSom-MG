<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Images Model
 *
 * @property \App\Model\Table\AgendasTable|\Cake\ORM\Association\HasMany $Agendas
 * @property \App\Model\Table\NewsTable|\Cake\ORM\Association\HasMany $News
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Image get($primaryKey, $options = [])
 * @method \App\Model\Entity\Image newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Image[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Image|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Image[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Image findOrCreate($search, callable $callback = null, $options = [])
 */
class ImagesTable extends Table
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

        $this->setTable('images');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Agendas', [
            'foreignKey' => 'image_id'
        ]);
        $this->hasMany('News', [
            'foreignKey' => 'image_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'image_id'
        ]);        
        $this->hasMany('Galleries', [
            'foreignKey' => 'image_id'
        ]);        
        $this->hasMany('GalleriesImages', [
            'foreignKey' => 'image_id'
        ]);
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'name' => 
            [
                'path' => 'webroot{DS}img{DS}{model}{DS}{microtime}{time}',
                'fields' => [
                    'dir' => 'path',
                ],
                'deleteCallback' => function ($path, $entity, $field, $settings) {
                    return [
                        $path . $entity->{$field},
                        $path . 'thumbnail-' . $entity->{$field}
                    ];
                },
                'transformer' =>  function ($table, $entity, $data, $field, $settings) {
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);

                        // Store the thumbnail in a temporary file
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;

                        // Use the Imagine library to DO THE THING
                    $size = new \Imagine\Image\Box(40, 40);
                    $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                    $imagine = new \Imagine\Gd\Imagine();

                        // Save that modified file to our temp file
                    $imagine->open($data['tmp_name'])
                    ->thumbnail($size, $mode)
                    ->save($tmp);

                        // Now return the original *and* the thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'thumbnail-' . $data['name'],
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
        $validator->provider('upload', \Josegonzalez\Upload\Validation\ImageValidation::class);
        $validator
        ->integer('id')
        ->allowEmpty('id', 'create');
        $validator->add('name', 'validExtension', [
            'rule' => ['extension',['gif', 'jpeg', 'png', 'jpg']],
            'message' => __('These files extension are allowed: .png .jpeg .png .jpg')
        ]);
        $validator->add('name', 'fileAboveMinHeight', [
            'rule' => ['isAboveMinHeight', 200],
            'message' => 'This image should at least be 200px high',
            'provider' => 'upload'
        ]);
        $validator->add('name', 'fileAboveMinWidth', [
            'rule' => ['isAboveMinHeight', 200],
            'message' => 'This image should at least be 200px high',
            'provider' => 'upload'
        ]);

        $validator->add('file', 'fileBelowMaxSize', [
            'rule' => ['isBelowMaxSize', 2048],
            'message' => 'This file is too large',
            'provider' => 'upload'
        ]);
        return $validator;
    }
    function saveImage($image)
    {
        $imagemsalva = $this->newEntity();
        $imagemsalva = $this->patchEntity($imagemsalva, $image);
        $imagemsalva = $this->save($imagemsalva);

        return $imagemsalva;
    }

    function preparePath($id){
        $userImage = $this->get($id);
        $userImage['path'] = substr($userImage['path'], 12);
        $userImage['path'] = str_replace('\\', '/', $userImage['path']);
        return $userImage;
    }

    function deleteUnlinkeds(){
        $news = $this->News->find('all')
        ->select(['image_id']);
        $users = $this->Users->find('all')
        ->select(['image_id']);
        $galleries = $this->Galleries->find('all')
        ->select(['image_id']);
        $galleriesImages = $this->GalleriesImages->find('all')
        ->select(['image_id']);
        $unlinkeds = $this->find()
        ->where(['Images.id NOT IN' => $news])
        ->where(['Images.id NOT IN' => $users])
        ->where(['Images.id NOT IN' => $galleries])
        ->where(['Images.id NOT IN' => $galleriesImages])
        ->select(['path', 'name', 'id']);
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
     $imageToDelete = $this->get($value['id']);
     $this->delete($imageToDelete);
 }
}
}
