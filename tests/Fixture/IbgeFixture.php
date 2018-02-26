<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IbgeFixture
 *
 */
class IbgeFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ibge';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cod_mun' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'nome_municipio' => ['type' => 'string', 'length' => 35, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'estado' => ['type' => 'string', 'length' => 25, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'sigla' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cod_uf' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cod_mun'], 'length' => []],
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
            'cod_mun' => 1,
            'nome_municipio' => 'Lorem ipsum dolor sit amet',
            'estado' => 'Lorem ipsum dolor sit a',
            'sigla' => '',
            'cod_uf' => 1
        ],
    ];
}
