<?php
namespace Wpadmin\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdminGroup Entity
 *
 * @property int $id
 * @property int $admin_id
 * @property int $group_id
 *
 * @property \Wpadmin\Model\Entity\Admin $admin
 * @property \Wpadmin\Model\Entity\Group $group
 */
class AdminGroup extends Entity
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
        '*' => true,
        'id' => false
    ];
}
