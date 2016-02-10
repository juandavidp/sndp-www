<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Deportistum Entity.
 *
 * @property int $iddeportista
 * @property string $nombre
 * @property string $docidentidad
 * @property \Cake\I18n\Time $fecha_nacimiento
 * @property string $lugar_nacimiento
 * @property string $categoria
 * @property int $ranking_nacional
 * @property int $ranking_internacional
 * @property string $tipo_asociacion
 * @property int $entidad_idEntidad
 * @property int $deporte_iddeporte
 */
class Deportistum extends Entity
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
        'iddeportista' => false,
    ];
}
