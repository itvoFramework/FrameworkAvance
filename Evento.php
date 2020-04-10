<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evento Entity
 *
 * @property int $id_eventos
 * @property string|null $titulo
 * @property string|null $descripcion
 * @property \Cake\I18n\FrozenTime|null $fechainicio
 * @property \Cake\I18n\FrozenTime|null $fechafin
 * @property string|null $observaciones
 * @property string|null $logotipo
 * @property string|null $eslogan
 * @property string|null $lugar
 * @property \Cake\I18n\FrozenTime|null $inicioregistro
 * @property \Cake\I18n\FrozenTime|null $cierreregistro
 * @property int|null $categoria_id
 * @property int|null $organizador_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Organizadore $organizadore
 * @property \App\Model\Entity\Catalogo[] $catalogos
 */
class Evento extends Entity
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
        'descripcion' => true,
        'fechainicio' => true,
        'fechafin' => true,
        'observaciones' => true,
        'logotipo' => true,
        'eslogan' => true,
        'lugar' => true,
        'inicioregistro' => true,
        'cierreregistro' => true,
        'categoria_id' => true,
        'organizador_id' => true,
        'categoria' => true,
        'organizadore' => true,
        'catalogos' => true,
    ];
}
