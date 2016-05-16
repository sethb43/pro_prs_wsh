<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Click Entity.
 *
 * @property string $id
 * @property string $page
 * @property string $ip
 * @property \Cake\I18n\Time $crt_ts
 * @property string $crt_usr
 * @property \App\Model\Entity\Click $click
 */
class Click extends Entity
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
        'click_id' => false,
    ];
}
