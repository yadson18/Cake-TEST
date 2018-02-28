<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratoFixture
 *
 */
class ContratoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'contrato';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'seq' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'data_vencimento' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'contratante' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'data_inclusao' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'data_ativacao' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'valor_contrato' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'data_ultima_cobranca' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'data_ultima_renovacao' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'obs' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'modalidade' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'razao_social' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'fantasia' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'dia_vencimento' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'status' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'seq_banco' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'master' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'analitico' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'sintetico' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'cod_resp_financeiro' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'valor_comissao' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'sintegra' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'efd' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nota_fiscal_eletronica' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'num_termi_adm' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'hardware' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cod_vendedor' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'data_cancelamento' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'cancelado' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null],
        'tipo_envio' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['seq'], 'length' => []],
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
            'seq' => 1,
            'data_vencimento' => '2018-02-28',
            'contratante' => 1,
            'data_inclusao' => '2018-02-28',
            'data_ativacao' => '2018-02-28',
            'valor_contrato' => 1,
            'data_ultima_cobranca' => '2018-02-28',
            'data_ultima_renovacao' => '2018-02-28',
            'obs' => 'Lorem ipsum dolor sit amet',
            'modalidade' => 1,
            'razao_social' => 'Lorem ipsum dolor sit amet',
            'fantasia' => 'Lorem ipsum dolor sit amet',
            'dia_vencimento' => '',
            'status' => 1,
            'seq_banco' => 1,
            'master' => 1,
            'analitico' => 1,
            'sintetico' => 1,
            'cod_resp_financeiro' => 1,
            'valor_comissao' => 1,
            'sintegra' => 'Lorem ipsum dolor sit ame',
            'efd' => 'Lorem ipsum dolor sit ame',
            'nota_fiscal_eletronica' => 'Lorem ipsum dolor sit ame',
            'num_termi_adm' => 1,
            'hardware' => 'Lorem ipsum dolor sit ame',
            'cod_vendedor' => 1,
            'data_cancelamento' => '2018-02-28',
            'cancelado' => 'Lorem ipsum dolor sit ame',
            'tipo_envio' => 1
        ],
    ];
}
