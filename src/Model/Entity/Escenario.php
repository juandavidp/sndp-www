<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Escenario Entity.
 *
 * @property int $idescenario
 * @property string $nombre
 * @property string $actividad_deporte
 * @property int $capacidad
 * @property int $estado_escala
 * @property string $estado_comentario
 * @property int $entidad_idEntidad
 * @property string $departamento
 * @property string $municipio
 * @property string $direccion
 * @property string $longitud
 * @property string $latitud
 * @property int $capacidad_publico
 * @property int $capacidad_deportistas
 * @property int $dedicacion_iddedicacion
 */
class Escenario extends Entity
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
        'idescenario' => false,
    ];
}
