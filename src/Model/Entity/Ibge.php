<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ibge Entity
 *
 * @property int $cod_mun
 * @property string $nome_municipio
 * @property string $estado
 * @property string $sigla
 * @property int $cod_uf
 */
class Ibge extends Entity
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
        'nome_municipio' => true,
        'estado' => true,
        'sigla' => true,
        'cod_uf' => true
    ];
}
