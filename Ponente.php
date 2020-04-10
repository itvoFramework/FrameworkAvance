<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ponente Entity
 *
 * @property int $id_ponentes
 * @property string|null $nombrecompleto
 * @property string|null $sexo
 * @property string|null $foto
 * @property string|null $cv
 * @property string|null $nivelacademico
 * @property string|null $cuenta
 * @property string|null $password
 * @property string|null $correo
 *
 * @property \App\Model\Entity\Horario[] $horarios
 */
class Ponente extends Entity
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
        'sexo' => true,
        'foto' => true,
        'cv' => true,
        'nivelacademico' => true,
        'cuenta' => true,
        'password' => true,
        'correo' => true,
        'horarios' => true,
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
