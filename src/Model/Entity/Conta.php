<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conta Entity
 *
 * @property int $seq
 * @property int $responsavel
 * @property \Cake\I18n\FrozenDate $data_emissao
 * @property \Cake\I18n\FrozenDate $data_venc
 * @property \Cake\I18n\FrozenDate $data_pagamento
 * @property string $descricao
 * @property int $valor
 * @property int $juros
 * @property int $multa
 * @property int $desconto
 * @property string $integral
 * @property string $documento
 * @property string $cfop
 * @property int $tipo_movimento
 * @property string $cancelado
 * @property string $plano_conta
 * @property int $tipo_cobranca
 * @property int $empresa
 * @property int $forma_pagamento
 * @property int $comissao
 * @property int $valor_pago
 * @property \Cake\I18n\FrozenDate $data_comissao
 * @property int $total_pagar
 * @property int $cadastrado_por
 * @property \Cake\I18n\FrozenDate $cadastrado_em
 * @property int $alterado_por
 * @property \Cake\I18n\FrozenDate $alterado_em
 * @property string $tipo_conta
 * @property int $cod_colaborador
 * @property int $sintetico
 * @property int $analitico
 * @property int $centro_custo
 * @property int $seq_banco
 * @property string $nr_cheque
 * @property int $cod_finalizadora
 * @property string $caixa
 * @property string $nosso_numero
 * @property string $lote_remessa
 */
class Conta extends Entity
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
        'responsavel' => true,
        'data_emissao' => true,
        'data_venc' => true,
        'data_pagamento' => true,
        'descricao' => true,
        'valor' => true,
        'juros' => true,
        'multa' => true,
        'desconto' => true,
        'integral' => true,
        'documento' => true,
        'cfop' => true,
        'tipo_movimento' => true,
        'cancelado' => true,
        'plano_conta' => true,
        'tipo_cobranca' => true,
        'empresa' => true,
        'forma_pagamento' => true,
        'comissao' => true,
        'valor_pago' => true,
        'data_comissao' => true,
        'total_pagar' => true,
        'cadastrado_por' => true,
        'cadastrado_em' => true,
        'alterado_por' => true,
        'alterado_em' => true,
        'tipo_conta' => true,
        'cod_colaborador' => true,
        'sintetico' => true,
        'analitico' => true,
        'centro_custo' => true,
        'seq_banco' => true,
        'nr_cheque' => true,
        'cod_finalizadora' => true,
        'caixa' => true,
        'nosso_numero' => true,
        'lote_remessa' => true
    ];
}
