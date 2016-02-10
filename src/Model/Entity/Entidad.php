<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Entidad Entity.
 *
 * @property int $idEntidad
 * @property string $nombre
 * @property string $tipo
 * @property string $caracter
 * @property int $telefono
 * @property string $departamento
 * @property string $municipio
 * @property string $direccion
 * @property string $longitud
 * @property string $latitud
 * @property int $usuario_idusuario
 */
class Entidad extends Entity
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
        'idEntidad' => false,
    ];
}
