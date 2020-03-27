<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evaluation Entity
 *
 * @property int $id
 * @property string $email
 * @property string $token
 * @property int $active
 * @property int $age
 * @property string $gender
 * @property string $location
 * @property \Cake\I18n\FrozenTime $date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $users_tests_id
 *
 * @property \App\Model\Entity\UsersTest $users_test
 */
class Evaluation extends Entity
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
        'email' => true,
        'token' => true,
        'active' => true,
        'age' => false,
        'gender' => false,
        'location' => false,
        'date' => false,
        'created' => true,
        'modified' => true,
        'users_tests_id' => true,
        'users_test' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token',
    ];
}
