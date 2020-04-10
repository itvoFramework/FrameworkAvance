<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pagodetalle Entity
 *
 * @property int $id_pagodetalles
 * @property float|null $importe
 * @property int|null $pago_id
 * @property int|null $catalogo_id
 *
 * @property \App\Model\Entity\Pago $pago
 * @property \App\Model\Entity\Catalogo $catalogo
 */
class Pagodetalle extends Entity
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
        'importe' => true,
        'pago_id' => true,
        'catalogo_id' => true,
        'pago' => true,
        'catalogo' => true,
    ];
}
