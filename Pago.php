<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pago Entity
 *
 * @property int $id_pagos
 * @property \Cake\I18n\FrozenDate|null $fechapago
 * @property int|null $participante_id
 *
 * @property \App\Model\Entity\Participante $participante
 * @property \App\Model\Entity\Pagodetalle[] $pagodetalles
 */
class Pago extends Entity
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
        'fechapago' => true,
        'participante_id' => true,
        'participante' => true,
        'pagodetalles' => true,
    ];
}
