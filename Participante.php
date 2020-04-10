<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Participante Entity
 *
 * @property int $id_participantes
 * @property string|null $nombrecompleto
 * @property string|null $curp
 * @property string|null $intitucionprocedencia
 * @property string|null $cuenta
 * @property string|null $password
 *
 * @property \App\Model\Entity\Pago[] $pagos
 * @property \App\Model\Entity\Participantehorario[] $participantehorarios
 */
class Participante extends Entity
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
        'nombrecompleto' => true,
        'curp' => true,
        'intitucionprocedencia' => true,
        'cuenta' => true,
        'password' => true,
        'pagos' => true,
        'participantehorarios' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
