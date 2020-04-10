<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Organizadore Entity
 *
 * @property int $id_organizadores
 * @property string|null $nombreorazonsocial
 * @property string|null $rfc
 * @property string|null $contacto
 * @property string|null $url
 * @property string|null $correo
 * @property string|null $telefono
 * @property string|null $direccion
 */
class Organizadore extends Entity
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
        'nombreorazonsocial' => true,
        'rfc' => true,
        'contacto' => true,
        'url' => true,
        'correo' => true,
        'telefono' => true,
        'direccion' => true,
    ];
}
