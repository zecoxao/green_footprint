<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visitum Entity.
 */
class Visitum extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'data' => true,
        'empresa' => true,
        'profissional' => true,
        'equipamento' => true,
    ];
}
