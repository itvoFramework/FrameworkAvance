<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Catalogo Entity
 *
 * @property int $id_catalogos
 * @property string|null $titulo
 * @property float|null $costo
 * @property int|null $totalhoras
 * @property int|null $cupolimite
 * @property int|null $actividad_id
 * @property int|null $evento_id
 *
 * @property \App\Model\Entity\Actividade $actividade
 * @property \App\Model\Entity\Evento $evento
 * @property \App\Model\Entity\Horario[] $horarios
 * @property \App\Model\Entity\Pagodetalle[] $pagodetalles
 */
class Catalogo extends Entity
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
        'titulo' => true,
        'costo' => true,
        'totalhoras' => true,
        'cupolimite' => true,
        'actividad_id' => true,
        'evento_id' => true,
        'actividade' => true,
        'evento' => true,
        'horarios' => true,
        'pagodetalles' => true,
    ];
}
