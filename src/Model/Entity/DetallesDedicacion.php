<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DetallesDedicacion Entity.
 *
 * @property int $id_detalles_dedicacion
 * @property int $dedicacion_iddedicacion
 * @property int $entidad_idEntidad
 */
class DetallesDedicacion extends Entity
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
        '*' => true,
        'id_detalles_dedicacion' => false,
    ];
}
