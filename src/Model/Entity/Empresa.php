<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity.
 */
class Empresa extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'localidade' => true,
        'cae' => true,
    ];
}
