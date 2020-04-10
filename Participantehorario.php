<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Participantehorario Entity
 *
 * @property int $id_participantehorarios
 * @property int|null $participante_id
 * @property int|null $horario_id
 * @property \Cake\I18n\FrozenTime|null $fecharegistro
 *
 * @property \App\Model\Entity\Participante $participante
 * @property \App\Model\Entity\Horario $horario
 */
class Participantehorario extends Entity
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
        'participante_id' => true,
        'horario_id' => true,
        'fecharegistro' => true,
        'participante' => true,
        'horario' => true,
    ];
}
