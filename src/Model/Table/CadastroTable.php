<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cadastro Model
 *
 * @method \App\Model\Entity\Cadastro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cadastro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cadastro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cadastro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cadastro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cadastro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cadastro findOrCreate($search, callable $callback = null, $options = [])
 */
class CadastroTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('cadastro');
        $this->setDisplayField('cod_cadastro');
        $this->setPrimaryKey('cod_cadastro');

        $this->hasOne('Contrato', [
            'foreignKey' => 'contratante'
        ]);
    }

    public static function defaultConnectionName() {
        return 'sricash';
    }

    public function listaCadastrosAtivos()
    {
        return $this->find('all')->select([
                //'Contrato.contratante',
                'Cadastro.cod_cadastro', 'Cadastro.razao', 'Cadastro.cnpj',
                'Cadastro.tipo', 'Cadastro.estado', 'Cadastro.cep', 'Cadastro.cidade',
                'Cadastro.endereco', 'Cadastro.bairro'
            ])
            //->contain(['Contrato'])
            ->where([
                'Cadastro.ativo' => 'T',
            ])
            ->order([
                'Cadastro.razao' => 'asc',
                'Cadastro.cod_cadastro' => 'asc'
            ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('empresa')
            ->notEmpty('empresa');

        $validator
            ->integer('cod_cadastro')
            ->allowEmpty('cod_cadastro', 'create');

        $validator
            ->scalar('razao')
            ->maxLength('razao', 60)
            ->requirePresence('razao', 'create')
            ->notEmpty('razao');

        $validator
            ->scalar('cnpj')
            ->maxLength('cnpj', 20)
            ->requirePresence('cnpj', 'create')
            ->notEmpty('cnpj');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 1)
            ->notEmpty('tipo');

        $validator
            ->scalar('estadual')
            ->maxLength('estadual', 20)
            ->requirePresence('estadual', 'create')
            ->notEmpty('estadual');

        $validator
            ->scalar('municipal')
            ->maxLength('municipal', 20)
            ->notEmpty('municipal');

        $validator
            ->scalar('cae')
            ->maxLength('cae', 10)
            ->notEmpty('cae');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 40)
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 30)
            ->requirePresence('bairro', 'create')
            ->notEmpty('bairro');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 10)
            ->requirePresence('cep', 'create')
            ->notEmpty('cep');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 40)
            ->requirePresence('cidade', 'create')
            ->notEmpty('cidade');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 20)
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 20)
            ->notEmpty('telefone');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 20)
            ->notEmpty('fax');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 20)
            ->notEmpty('celular');

        $validator
            ->scalar('contato')
            ->maxLength('contato', 40)
            ->notEmpty('contato');

        $validator
            ->scalar('endcob')
            ->maxLength('endcob', 40)
            ->notEmpty('endcob');

        $validator
            ->scalar('bairrocob')
            ->maxLength('bairrocob', 30)
            ->notEmpty('bairrocob');

        $validator
            ->scalar('cepcob')
            ->maxLength('cepcob', 10)
            ->notEmpty('cepcob');

        $validator
            ->scalar('cidadecob')
            ->maxLength('cidadecob', 40)
            ->notEmpty('cidadecob');

        $validator
            ->scalar('estadocob')
            ->maxLength('estadocob', 20)
            ->notEmpty('estadocob');

        $validator
            ->scalar('obs')
            ->maxLength('obs', 1000)
            ->notEmpty('obs');

        $validator
            ->integer('atividade')
            ->notEmpty('atividade');

        $validator
            ->scalar('correspondencia')
            ->maxLength('correspondencia', 1)
            ->notEmpty('correspondencia');

        $validator
            ->scalar('tributacao')
            ->maxLength('tributacao', 1)
            ->notEmpty('tributacao');

        $validator
            ->numeric('comissao')
            ->notEmpty('comissao');

        $validator
            ->integer('vendedor')
            ->notEmpty('vendedor');

        $validator
            ->scalar('registro')
            ->maxLength('registro', 1)
            ->notEmpty('registro');

        $validator
            ->numeric('deslocamento')
            ->notEmpty('deslocamento');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 1)
            ->requirePresence('ativo', 'create')
            ->notEmpty('ativo');

        $validator
            ->integer('multdistancia')
            ->notEmpty('multdistancia');

        $validator
            ->integer('multatividade')
            ->notEmpty('multatividade');

        $validator
            ->integer('cadastrado_por')
            ->requirePresence('cadastrado_por', 'create')
            ->notEmpty('cadastrado_por');

        $validator
            ->date('cadastrado_em')
            ->requirePresence('cadastrado_em', 'create')
            ->notEmpty('cadastrado_em');

        $validator
            ->integer('alterado_por')
            ->requirePresence('alterado_por', 'create')
            ->notEmpty('alterado_por');

        $validator
            ->date('alterado_em')
            ->requirePresence('alterado_em', 'create')
            ->notEmpty('alterado_em');

        $validator
            ->scalar('area')
            ->maxLength('area', 1)
            ->notEmpty('area');

        $validator
            ->integer('limite')
            ->notEmpty('limite');

        $validator
            ->date('ultimo_venc')
            ->notEmpty('ultimo_venc');

        $validator
            ->date('atual_venc')
            ->notEmpty('atual_venc');

        $validator
            ->integer('prazo')
            ->notEmpty('prazo');

        $validator
            ->scalar('tipo_fatura')
            ->maxLength('tipo_fatura', 10)
            ->notEmpty('tipo_fatura');

        $validator
            ->scalar('datanasc')
            ->maxLength('datanasc', 5)
            ->notEmpty('datanasc');

        $validator
            ->scalar('dia_fatuta')
            ->maxLength('dia_fatuta', 2)
            ->notEmpty('dia_fatuta');

        $validator
            ->date('venc_cartao')
            ->notEmpty('venc_cartao');

        $validator
            ->scalar('cartao_proprio')
            ->maxLength('cartao_proprio', 1)
            ->notEmpty('cartao_proprio');

        $validator
            ->scalar('senhacred')
            ->maxLength('senhacred', 12)
            ->notEmpty('senhacred');

        $validator
            ->scalar('nrend2')
            ->maxLength('nrend2', 12)
            ->notEmpty('nrend2');

        $validator
            ->scalar('e_mail')
            ->maxLength('e_mail', 100)
            ->notEmpty('e_mail');

        $validator
            ->scalar('cod_reg_trib')
            ->maxLength('cod_reg_trib', 1)
            ->requirePresence('cod_reg_trib', 'create')
            ->notEmpty('cod_reg_trib');

        $validator
            ->scalar('tipocad')
            ->maxLength('tipocad', 1)
            ->notEmpty('tipocad');

        $validator
            ->scalar('st_liminar')
            ->maxLength('st_liminar', 1)
            ->notEmpty('st_liminar');

        $validator
            ->integer('tabela_preco')
            ->notEmpty('tabela_preco');

        $validator
            ->integer('id_convenio')
            ->notEmpty('id_convenio');

        $validator
            ->scalar('nr_convenio')
            ->maxLength('nr_convenio', 100)
            ->notEmpty('nr_convenio');

        $validator
            ->integer('cod_ctardz')
            ->notEmpty('cod_ctardz');

        $validator
            ->integer('dia_corte')
            ->notEmpty('dia_corte');

        $validator
            ->integer('dia_vencimento')
            ->notEmpty('dia_vencimento');

        $validator
            ->scalar('protestar')
            ->maxLength('protestar', 1)
            ->notEmpty('protestar');

        $validator
            ->integer('dias_protestar')
            ->notEmpty('dias_protestar');

        $validator
            ->scalar('cpais')
            ->maxLength('cpais', 4)
            ->requirePresence('cpais', 'create')
            ->notEmpty('cpais');

        $validator
            ->scalar('trilha1')
            ->maxLength('trilha1', 20)
            ->notEmpty('trilha1');

        $validator
            ->scalar('trilha2')
            ->maxLength('trilha2', 20)
            ->notEmpty('trilha2');

        $validator
            ->scalar('trilha3')
            ->maxLength('trilha3', 20)
            ->notEmpty('trilha3');

        return $validator;
    }
}