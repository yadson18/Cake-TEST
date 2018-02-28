<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContratoSerieFixture
 *
 */
class ContratoSerieFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'contrato_serie';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'seq_contrato' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'serie_impressora' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'numero_ecf' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'modelo_impressora' => ['type' => 'string', 'length' => 12, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'dias' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . 'Z' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'ultima_renovacao' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null],
        'atualizar' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => '5' . "\0" . 'TL', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'online' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => '5' . "\0" . 'FL', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['serie_impressora'], 'length' => []],
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
            'seq_contrato' => 1,
            'serie_impressora' => '0594000b-25b1-4646-90e5-c24d7e290b33',
            'numero_ecf' => 1,
            'modelo_impressora' => 'Lorem ipsu',
            'dias' => 1,
            'ultima_renovacao' => '2018-02-28',
            'atualizar' => 'Lorem ipsum dolor sit ame',
            'online' => 'Lorem ipsum dolor sit ame'
        ],
    ];
}
