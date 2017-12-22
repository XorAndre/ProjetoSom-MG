<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Access Entity
 *
 * @property int $id
 * @property string $controller
 * @property string $action
 * @property string $param
 * @property \Cake\I18n\FrozenDate $data
 */
class Access extends Entity
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
        'controller' => true,
        'action' => true,
        'param' => true,
        'data' => true
    ];
}
