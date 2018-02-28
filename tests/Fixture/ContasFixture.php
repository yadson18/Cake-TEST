<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContasFixture
 *
 */
class ContasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'seq' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'responsavel' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'data_emissao' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'data_venc' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'data_pagamento' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'descricao' => ['type' => 'string', 'length' => 600, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'valor' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'juros' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'multa' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'desconto' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'integral' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'documento' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cfop' => ['type' => 'string', 'length' => 4, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tipo_movimento' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'cancelado' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'plano_conta' => ['type' => 'string', 'length' => 11, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'tipo_cobranca' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'empresa' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'forma_pagamento' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'comissao' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'valor_pago' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'data_comissao' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'total_pagar' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'cadastrado_por' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'cadastrado_em' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'alterado_por' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'alterado_em' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'tipo_conta' => ['type' => 'string', 'fixed' => true, 'length' => 1, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null],
        'cod_colaborador' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'sintetico' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'analitico' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'centro_custo' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'seq_banco' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'nr_cheque' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => '5' . "\0" . '0L', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cod_finalizadora' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'caixa' => ['type' => 'string', 'length' => 4, 'null' => false, 'default' => '5' . "\0" . '00L', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'nosso_numero' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'lote_remessa' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => '5' . "\0" . '0L', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
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
            'responsavel' => 1,
            'data_emissao' => '2018-02-28',
            'data_venc' => '2018-02-28',
            'data_pagamento' => '2018-02-28',
            'descricao' => 'Lorem ipsum dolor sit amet',
            'valor' => 1,
            'juros' => 1,
            'multa' => 1,
            'desconto' => 1,
            'integral' => 'Lorem ipsum dolor sit ame',
            'documento' => 'Lorem ip',
            'cfop' => 'Lo',
            'tipo_movimento' => 1,
            'cancelado' => 'Lorem ipsum dolor sit ame',
            'plano_conta' => 'Lorem ips',
            'tipo_cobranca' => 1,
            'empresa' => 1,
            'forma_pagamento' => 1,
            'comissao' => 1,
            'valor_pago' => 1,
            'data_comissao' => '2018-02-28',
            'total_pagar' => 1,
            'cadastrado_por' => 1,
            'cadastrado_em' => '2018-02-28',
            'alterado_por' => 1,
            'alterado_em' => '2018-02-28',
            'tipo_conta' => 'Lorem ipsum dolor sit ame',
            'cod_colaborador' => 1,
            'sintetico' => 1,
            'analitico' => 1,
            'centro_custo' => 1,
            'seq_banco' => 1,
            'nr_cheque' => 'Lorem ip',
            'cod_finalizadora' => 1,
            'caixa' => 'Lo',
            'nosso_numero' => 'Lorem ipsum d',
            'lote_remessa' => 'Lore'
        ],
    ];
}
