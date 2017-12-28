<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Banner Entity
 *
 * @property int $id
 * @property float $valor
 * @property string $name
 * @property \Cake\I18n\FrozenTime $data
 * @property string $path
 * @property int $place_id
 *
 * @property \App\Model\Entity\Place $place
 */
class Banner extends Entity
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
        'valor' => true,
        'name' => true,
        'data' => true,
        'path' => true,
        'place_id' => true,
        'place' => true
    ];
}
