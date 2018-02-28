<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contrato Entity
 *
 * @property int $seq
 * @property \Cake\I18n\FrozenDate $data_vencimento
 * @property int $contratante
 * @property \Cake\I18n\FrozenDate $data_inclusao
 * @property \Cake\I18n\FrozenDate $data_ativacao
 * @property int $valor_contrato
 * @property \Cake\I18n\FrozenDate $data_ultima_cobranca
 * @property \Cake\I18n\FrozenDate $data_ultima_renovacao
 * @property string $obs
 * @property int $modalidade
 * @property string $razao_social
 * @property string $fantasia
 * @property string $dia_vencimento
 * @property int $status
 * @property int $seq_banco
 * @property int $master
 * @property int $analitico
 * @property int $sintetico
 * @property int $cod_resp_financeiro
 * @property int $valor_comissao
 * @property string $sintegra
 * @property string $efd
 * @property string $nota_fiscal_eletronica
 * @property int $num_termi_adm
 * @property string $hardware
 * @property int $cod_vendedor
 * @property \Cake\I18n\FrozenDate $data_cancelamento
 * @property string $cancelado
 * @property int $tipo_envio
 */
class Contrato extends Entity
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
        'data_vencimento' => true,
        'contratante' => true,
        'data_inclusao' => true,
        'data_ativacao' => true,
        'valor_contrato' => true,
        'data_ultima_cobranca' => true,
        'data_ultima_renovacao' => true,
        'obs' => true,
        'modalidade' => true,
        'razao_social' => true,
        'fantasia' => true,
        'dia_vencimento' => true,
        'status' => true,
        'seq_banco' => true,
        'master' => true,
        'analitico' => true,
        'sintetico' => true,
        'cod_resp_financeiro' => true,
        'valor_comissao' => true,
        'sintegra' => true,
        'efd' => true,
        'nota_fiscal_eletronica' => true,
        'num_termi_adm' => true,
        'hardware' => true,
        'cod_vendedor' => true,
        'data_cancelamento' => true,
        'cancelado' => true,
        'tipo_envio' => true
    ];
}
