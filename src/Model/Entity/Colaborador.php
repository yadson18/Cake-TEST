<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Colaborador Entity
 *
 * @property int $empresa
 * @property int $cod_colaborador
 * @property string $nome
 * @property int $funcao
 * @property float $comissao
 * @property string $telefone
 * @property string $cpf
 * @property string $rg
 * @property string $endereco
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property string $acesso
 * @property string $login
 * @property string $senha
 * @property string $ativo
 * @property int $cod_cadastro
 * @property string $conectado
 * @property string $local
 * @property string $acesso2
 * @property string $email
 */
class Colaborador extends Entity
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
        'nome' => true,
        'funcao' => true,
        'comissao' => true,
        'telefone' => true,
        'cpf' => true,
        'rg' => true,
        'endereco' => true,
        'bairro' => true,
        'cidade' => true,
        'uf' => true,
        'acesso' => true,
        'login' => true,
        'senha' => true,
        'ativo' => true,
        'cod_cadastro' => true,
        'conectado' => true,
        'local' => true,
        'acesso2' => true,
        'email' => true
    ];
}
