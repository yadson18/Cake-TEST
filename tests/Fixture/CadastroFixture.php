<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CadastroFixture
 *
 */
class CadastroFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cadastro';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'empresa' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'cod_cadastro' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'razao' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'fantasia' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cnpj' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'estadual' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'municipal' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cae' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'endereco' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'bairro' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cep' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cidade' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'estado' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'telefone' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'fax' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'celular' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'contato' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'endcob' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'bairrocob' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cepcob' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cidadecob' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'estadocob' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'obs' => ['type' => 'string', 'length' => 1000, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'atividade' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'correspondencia' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tributacao' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'comissao' => ['type' => 'float', 'length' => 8, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null],
        'vendedor' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'registro' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'deslocamento' => ['type' => 'float', 'length' => 8, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null],
        'ativo' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'multdistancia' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'multatividade' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'cadastrado_por' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'cadastrado_em' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'alterado_por' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'alterado_em' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'area' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'limite' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'ultimo_venc' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'atual_venc' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'prazo' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'tipo_fatura' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => '5
' . "\0" . 'VENCIMENTOL', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'datanasc' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'dia_fatuta' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'venc_cartao' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'cartao_proprio' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'senhacred' => ['type' => 'string', 'length' => 12, 'null' => false, 'default' => '5' . "\0" . '0L', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nrend1' => ['type' => 'string', 'length' => 12, 'null' => false, 'default' => null, 'collate' => 'WIN_PTBR                                                                                                                    ', 'comment' => null, 'precision' => null, 'fixed' => null],
        'nrend2' => ['type' => 'string', 'length' => 12, 'null' => false, 'default' => null, 'collate' => 'WIN_PTBR                                                                                                                    ', 'comment' => null, 'precision' => null, 'fixed' => null],
        'e_mail' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'WIN_PTBR                                                                                                                    ', 'comment' => null, 'precision' => null, 'fixed' => null],
        'cod_reg_trib' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => '5' . "\0" . '3L', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tipocad' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'st_liminar' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => '5' . "\0" . 'NL', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'complementar' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tabela_preco' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'id_convenio' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'nr_convenio' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'WIN_PTBR                                                                                                                    ', 'comment' => null, 'precision' => null, 'fixed' => null],
        'cod_ctardz' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'dia_corte' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'dia_vencimento' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'protestar' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'dias_protestar' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'cpais' => ['type' => 'string', 'length' => 4, 'null' => false, 'default' => '5' . "\0" . '1058L', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'trilha1' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'trilha2' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'trilha3' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cod_cadastro'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'empresa' => 1,
            'cod_cadastro' => 1,
            'razao' => 'Lorem ipsum dolor sit amet',
            'fantasia' => 'Lorem ipsum dolor sit amet',
            'cnpj' => 'Lorem ipsum dolor ',
            'tipo' => 'Lorem ipsum dolor sit ame',
            'estadual' => 'Lorem ipsum dolor ',
            'municipal' => 'Lorem ipsum dolor ',
            'cae' => 'Lorem ip',
            'endereco' => 'Lorem ipsum dolor sit amet',
            'bairro' => 'Lorem ipsum dolor sit amet',
            'cep' => 'Lorem ip',
            'cidade' => 'Lorem ipsum dolor sit amet',
            'estado' => 'Lorem ipsum dolor ',
            'telefone' => 'Lorem ipsum dolor ',
            'fax' => 'Lorem ipsum dolor ',
            'celular' => 'Lorem ipsum dolor ',
            'contato' => 'Lorem ipsum dolor sit amet',
            'endcob' => 'Lorem ipsum dolor sit amet',
            'bairrocob' => 'Lorem ipsum dolor sit amet',
            'cepcob' => 'Lorem ip',
            'cidadecob' => 'Lorem ipsum dolor sit amet',
            'estadocob' => 'Lorem ipsum dolor ',
            'obs' => 'Lorem ipsum dolor sit amet',
            'atividade' => 1,
            'correspondencia' => 'Lorem ipsum dolor sit ame',
            'tributacao' => 'Lorem ipsum dolor sit ame',
            'comissao' => 1,
            'vendedor' => 1,
            'registro' => 'Lorem ipsum dolor sit ame',
            'deslocamento' => 1,
            'ativo' => 'Lorem ipsum dolor sit ame',
            'multdistancia' => 1,
            'multatividade' => 1,
            'cadastrado_por' => 1,
            'cadastrado_em' => '2018-02-22',
            'alterado_por' => 1,
            'alterado_em' => '2018-02-22',
            'area' => 'Lorem ipsum dolor sit ame',
            'limite' => 1,
            'ultimo_venc' => '2018-02-22',
            'atual_venc' => '2018-02-22',
            'prazo' => 1,
            'tipo_fatura' => 'Lorem ip',
            'datanasc' => 'Lor',
            'dia_fatuta' => '',
            'venc_cartao' => '2018-02-22',
            'cartao_proprio' => 'Lorem ipsum dolor sit ame',
            'senhacred' => 'Lorem ipsu',
            'nrend1' => 'Lorem ipsu',
            'nrend2' => 'Lorem ipsu',
            'e_mail' => 'Lorem ipsum dolor sit amet',
            'cod_reg_trib' => 'Lorem ipsum dolor sit ame',
            'tipocad' => 'Lorem ipsum dolor sit ame',
            'st_liminar' => 'Lorem ipsum dolor sit ame',
            'complementar' => 'Lorem ipsum dolor sit amet',
            'tabela_preco' => 1,
            'id_convenio' => 1,
            'nr_convenio' => 'Lorem ipsum dolor sit amet',
            'cod_ctardz' => 1,
            'dia_corte' => 1,
            'dia_vencimento' => 1,
            'protestar' => 'Lorem ipsum dolor sit ame',
            'dias_protestar' => 1,
            'cpais' => 'Lo',
            'trilha1' => 'Lorem ipsum dolor ',
            'trilha2' => 'Lorem ipsum dolor ',
            'trilha3' => 'Lorem ipsum dolor '
        ],
    ];
}
