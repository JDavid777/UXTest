<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UsersTest Entity
 *
 * @property string $id
 * @property string $url_app
 * @property \Cake\I18n\FrozenTime $max_date
 * @property string $message
 * @property int $user_id
 * @property string $test_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Test $test
 */
class UsersTest extends Entity
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
        'url_app' => true,
        'max_date' => true,
        'message' => true,
        'user_id' => true,
        'test_id' => true,
        'user' => true,
        'test' => true,
    ];
}
