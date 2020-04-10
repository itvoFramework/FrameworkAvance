<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Horario Entity
 *
 * @property int $id_horarios
 * @property int|null $catalogo_id
 * @property int|null $ponente_id
 *
 * @property \App\Model\Entity\Catalogo $catalogo
 * @property \App\Model\Entity\Ponente $ponente
 * @property \App\Model\Entity\Horariodetalle[] $horariodetalles
 * @property \App\Model\Entity\Participantehorario[] $participantehorarios
 */
class Horario extends Entity
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
        'catalogo_id' => true,
        'ponente_id' => true,
        'catalogo' => true,
        'ponente' => true,
        'horariodetalles' => true,
        'participantehorarios' => true,
    ];
}
