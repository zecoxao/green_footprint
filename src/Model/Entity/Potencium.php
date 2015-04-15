<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Potencium Entity.
 */
class Potencium extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'potencia' => true,
    ];
}
