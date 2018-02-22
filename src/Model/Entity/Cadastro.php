<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cadastro Entity
 *
 * @property int $empresa
 * @property int $cod_cadastro
 * @property string $razao
 * @property string $fantasia
 * @property string $cnpj
 * @property string $tipo
 * @property string $estadual
 * @property string $municipal
 * @property string $cae
 * @property string $endereco
 * @property string $bairro
 * @property string $cep
 * @property string $cidade
 * @property string $estado
 * @property string $telefone
 * @property string $fax
 * @property string $celular
 * @property string $contato
 * @property string $endcob
 * @property string $bairrocob
 * @property string $cepcob
 * @property string $cidadecob
 * @property string $estadocob
 * @property string $obs
 * @property int $atividade
 * @property string $correspondencia
 * @property string $tributacao
 * @property float $comissao
 * @property int $vendedor
 * @property string $registro
 * @property float $deslocamento
 * @property string $ativo
 * @property int $multdistancia
 * @property int $multatividade
 * @property int $cadastrado_por
 * @property \Cake\I18n\FrozenDate $cadastrado_em
 * @property int $alterado_por
 * @property \Cake\I18n\FrozenDate $alterado_em
 * @property string $area
 * @property int $limite
 * @property \Cake\I18n\FrozenDate $ultimo_venc
 * @property \Cake\I18n\FrozenDate $atual_venc
 * @property int $prazo
 * @property string $tipo_fatura
 * @property string $datanasc
 * @property string $dia_fatuta
 * @property \Cake\I18n\FrozenDate $venc_cartao
 * @property string $cartao_proprio
 * @property string $senhacred
 * @property string $nrend1
 * @property string $nrend2
 * @property string $e_mail
 * @property string $cod_reg_trib
 * @property string $tipocad
 * @property string $st_liminar
 * @property string $complementar
 * @property int $tabela_preco
 * @property int $id_convenio
 * @property string $nr_convenio
 * @property int $cod_ctardz
 * @property int $dia_corte
 * @property int $dia_vencimento
 * @property string $protestar
 * @property int $dias_protestar
 * @property string $cpais
 * @property string $trilha1
 * @property string $trilha2
 * @property string $trilha3
 */
class Cadastro extends Entity
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
        'empresa' => true,
        'razao' => true,
        'fantasia' => true,
        'cnpj' => true,
        'tipo' => true,
        'estadual' => true,
        'municipal' => true,
        'cae' => true,
        'endereco' => true,
        'bairro' => true,
        'cep' => true,
        'cidade' => true,
        'estado' => true,
        'telefone' => true,
        'fax' => true,
        'celular' => true,
        'contato' => true,
        'endcob' => true,
        'bairrocob' => true,
        'cepcob' => true,
        'cidadecob' => true,
        'estadocob' => true,
        'obs' => true,
        'atividade' => true,
        'correspondencia' => true,
        'tributacao' => true,
        'comissao' => true,
        'vendedor' => true,
        'registro' => true,
        'deslocamento' => true,
        'ativo' => true,
        'multdistancia' => true,
        'multatividade' => true,
        'cadastrado_por' => true,
        'cadastrado_em' => true,
        'alterado_por' => true,
        'alterado_em' => true,
        'area' => true,
        'limite' => true,
        'ultimo_venc' => true,
        'atual_venc' => true,
        'prazo' => true,
        'tipo_fatura' => true,
        'datanasc' => true,
        'dia_fatuta' => true,
        'venc_cartao' => true,
        'cartao_proprio' => true,
        'senhacred' => true,
        'nrend1' => true,
        'nrend2' => true,
        'e_mail' => true,
        'cod_reg_trib' => true,
        'tipocad' => true,
        'st_liminar' => true,
        'complementar' => true,
        'tabela_preco' => true,
        'id_convenio' => true,
        'nr_convenio' => true,
        'cod_ctardz' => true,
        'dia_corte' => true,
        'dia_vencimento' => true,
        'protestar' => true,
        'dias_protestar' => true,
        'cpais' => true,
        'trilha1' => true,
        'trilha2' => true,
        'trilha3' => true
    ];
}
