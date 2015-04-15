<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Utilizador Entity.
 */
class Utilizador extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'password' => true,
        'contacto' => true,
    ];
}