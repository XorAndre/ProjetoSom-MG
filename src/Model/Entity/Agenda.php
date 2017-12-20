<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agenda Entity
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property \Cake\I18n\FrozenDate $date
 * @property int $image_id
 *
 * @property \App\Model\Entity\Image $image
 */
class Agenda extends Entity
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
        'title' => true,
        'text' => true,
        'date' => true,
        'image_id' => true,
        'image' => true
    ];
}
