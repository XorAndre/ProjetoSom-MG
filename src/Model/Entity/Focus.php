<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Focus Entity
 *
 * @property int $id
 * @property string $nome
 * @property \Cake\I18n\FrozenTime $data
 * @property int $category_id
 * @property string $detalhes
 * @property int $image_id
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Image $image
 */
class Focus extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'data' => true,
        'category_id' => true,
        'detalhes' => true,
        'image_id' => true,
        'category' => true,
        'image' => true
    ];
}
