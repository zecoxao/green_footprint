<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Simulacao Entity.
 */
class Simulacao extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'empresa' => true,
        'data' => true,
        'consumo_total' => true,
        'equipamento' => true,
    ];
}
