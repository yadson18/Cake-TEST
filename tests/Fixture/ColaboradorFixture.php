<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ColaboradorFixture
 *
 */
class ColaboradorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'colaborador';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'empresa' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'cod_colaborador' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'nome' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'funcao' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'comissao' => ['type' => 'float', 'length' => 8, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => null],
        'telefone' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cpf' => ['type' => 'string', 'length' => 13, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'rg' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'endereco' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'bairro' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cidade' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'uf' => ['type' => 'string', 'length' => 2, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'acesso' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '(' . "\0" . '0000000000000000000000000000000000000000L', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'login' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'senha' => ['type' => 'string', 'fixed' => true, 'length' => 12, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '111111L', 'collate' => null, 'comment' => null, 'precision' => null],
        'ativo' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . 'TL', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'cod_cadastro' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . '' . "\0" . 'L', 'comment' => null, 'precision' => null, 'autoIncrement' => null],
        'conectado' => ['type' => 'string', 'length' => 1, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . 'NL', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'local' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'acesso2' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => '' . "\0" . '' . "\0" . '' . "\0" . '000000L', 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cod_colaborador'], 'length' => []],
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
            'cod_colaborador' => 1,
            'nome' => 'Lorem ipsum dolor sit amet',
            'funcao' => 1,
            'comissao' => 1,
            'telefone' => 'Lorem ipsum dolor sit amet',
            'cpf' => 'Lorem ipsum',
            'rg' => 'Lorem ipsum d',
            'endereco' => 'Lorem ipsum dolor sit amet',
            'bairro' => 'Lorem ipsum dolor sit amet',
            'cidade' => 'Lorem ipsum dolor sit amet',
            'uf' => '',
            'acesso' => 'Lorem ipsum dolor sit amet',
            'login' => 'Lorem ipsum dolor ',
            'senha' => 'Lorem ipsu',
            'ativo' => 'Lorem ipsum dolor sit ame',
            'cod_cadastro' => 1,
            'conectado' => 'Lorem ipsum dolor sit ame',
            'local' => 'Lorem ipsum dolor sit amet',
            'acesso2' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
