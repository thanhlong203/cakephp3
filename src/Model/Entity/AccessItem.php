<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccessItem Entity
 *
 * @property int $ID
 * @property int|null $CONTROLLER_ID
 * @property int|null $PARENT_ID
 * @property string|null $ALIAS
 * @property string|null $DISPLAY_NAME
 * @property string|null $SUB_FUNCTION
 * @property float|null $ACTIVE_FLG
 * @property \Cake\I18n\FrozenTime $INSERT_DATETIME
 * @property \Cake\I18n\FrozenTime|null $UPDATE_DATETIME
 */
class AccessItem extends Entity
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
        'CONTROLLER_ID' => true,
        'PARENT_ID' => true,
        'ALIAS' => true,
        'DISPLAY_NAME' => true,
        'SUB_FUNCTION' => true,
        'ACTIVE_FLG' => true,
        'INSERT_DATETIME' => true,
        'UPDATE_DATETIME' => true,
    ];
}
