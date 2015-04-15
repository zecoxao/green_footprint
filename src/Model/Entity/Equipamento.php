<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipamento Entity.
 */
class Equipamento extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'potencia' => true,
        'horas' => true,
        'quantidade' => true,
        'consumo' => true,
    ];
}
