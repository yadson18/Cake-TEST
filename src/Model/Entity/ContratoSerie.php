<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContratoSerie Entity
 *
 * @property int $seq_contrato
 * @property string $serie_impressora
 * @property int $numero_ecf
 * @property string $modelo_impressora
 * @property int $dias
 * @property \Cake\I18n\FrozenDate $ultima_renovacao
 * @property string $atualizar
 * @property string $online
 */
class ContratoSerie extends Entity
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
        'seq_contrato' => true,
        'numero_ecf' => true,
        'modelo_impressora' => true,
        'dias' => true,
        'ultima_renovacao' => true,
        'atualizar' => true,
        'online' => true
    ];
}
