<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Noticium Entity.
 *
 * @property int $idNoticia
 * @property string $titulo
 * @property \Cake\I18n\Time $fecha
 * @property string $foto
 * @property string $texto_noticia
 * @property int $entidad_idEntidad
 */
class Noticium extends Entity
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
        'idNoticia' => false,
    ];
}
