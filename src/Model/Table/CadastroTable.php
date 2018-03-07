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
    }

    public static function defaultConnectionName() {
        return 'sricash';
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
            ->requirePresence('empresa', 'create')
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
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->scalar('estadual')
            ->maxLength('estadual', 20)
            ->requirePresence('estadual', 'create')
            ->notEmpty('estadual');

        $validator
            ->scalar('municipal')
            ->maxLength('municipal', 20)
            ->requirePresence('municipal', 'create')
            ->notEmpty('municipal');

        $validator
            ->scalar('cae')
            ->maxLength('cae', 10)
            ->requirePresence('cae', 'create')
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
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->scalar('fax')
            ->maxLength('fax', 20)
            ->requirePresence('fax', 'create')
            ->notEmpty('fax');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 20)
            ->requirePresence('celular', 'create')
            ->notEmpty('celular');

        $validator
            ->scalar('contato')
            ->maxLength('contato', 40)
            ->requirePresence('contato', 'create')
            ->notEmpty('contato');

        $validator
            ->scalar('endcob')
            ->maxLength('endcob', 40)
            ->requirePresence('endcob', 'create')
            ->notEmpty('endcob');

        $validator
            ->scalar('bairrocob')
            ->maxLength('bairrocob', 30)
            ->requirePresence('bairrocob', 'create')
            ->notEmpty('bairrocob');

        $validator
            ->scalar('cepcob')
            ->maxLength('cepcob', 10)
            ->requirePresence('cepcob', 'create')
            ->notEmpty('cepcob');

        $validator
            ->scalar('cidadecob')
            ->maxLength('cidadecob', 40)
            ->requirePresence('cidadecob', 'create')
            ->notEmpty('cidadecob');

        $validator
            ->scalar('estadocob')
            ->maxLength('estadocob', 20)
            ->requirePresence('estadocob', 'create')
            ->notEmpty('estadocob');

        $validator
            ->scalar('obs')
            ->maxLength('obs', 1000)
            ->requirePresence('obs', 'create')
            ->notEmpty('obs');

        $validator
            ->integer('atividade')
            ->requirePresence('atividade', 'create')
            ->notEmpty('atividade');

        $validator
            ->scalar('correspondencia')
            ->maxLength('correspondencia', 1)
            ->requirePresence('correspondencia', 'create')
            ->notEmpty('correspondencia');

        $validator
            ->scalar('tributacao')
            ->maxLength('tributacao', 1)
            ->requirePresence('tributacao', 'create')
            ->notEmpty('tributacao');

        $validator
            ->numeric('comissao')
            ->requirePresence('comissao', 'create')
            ->notEmpty('comissao');

        $validator
            ->integer('vendedor')
            ->requirePresence('vendedor', 'create')
            ->notEmpty('vendedor');

        $validator
            ->scalar('registro')
            ->maxLength('registro', 1)
            ->requirePresence('registro', 'create')
            ->notEmpty('registro');

        $validator
            ->numeric('deslocamento')
            ->requirePresence('deslocamento', 'create')
            ->notEmpty('deslocamento');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 1)
            ->requirePresence('ativo', 'create')
            ->notEmpty('ativo');

        $validator
            ->integer('multdistancia')
            ->requirePresence('multdistancia', 'create')
            ->notEmpty('multdistancia');

        $validator
            ->integer('multatividade')
            ->requirePresence('multatividade', 'create')
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
            ->requirePresence('area', 'create')
            ->notEmpty('area');

        $validator
            ->integer('limite')
            ->requirePresence('limite', 'create')
            ->notEmpty('limite');

        $validator
            ->date('ultimo_venc')
            ->requirePresence('ultimo_venc', 'create')
            ->notEmpty('ultimo_venc');

        $validator
            ->date('atual_venc')
            ->requirePresence('atual_venc', 'create')
            ->notEmpty('atual_venc');

        $validator
            ->integer('prazo')
            ->requirePresence('prazo', 'create')
            ->notEmpty('prazo');

        $validator
            ->scalar('tipo_fatura')
            ->maxLength('tipo_fatura', 10)
            ->requirePresence('tipo_fatura', 'create')
            ->notEmpty('tipo_fatura');

        $validator
            ->scalar('datanasc')
            ->maxLength('datanasc', 5)
            ->requirePresence('datanasc', 'create')
            ->notEmpty('datanasc');

        $validator
            ->scalar('dia_fatuta')
            ->maxLength('dia_fatuta', 2)
            ->requirePresence('dia_fatuta', 'create')
            ->notEmpty('dia_fatuta');

        $validator
            ->date('venc_cartao')
            ->requirePresence('venc_cartao', 'create')
            ->notEmpty('venc_cartao');

        $validator
            ->scalar('cartao_proprio')
            ->maxLength('cartao_proprio', 1)
            ->requirePresence('cartao_proprio', 'create')
            ->notEmpty('cartao_proprio');

        $validator
            ->scalar('senhacred')
            ->maxLength('senhacred', 12)
            ->requirePresence('senhacred', 'create')
            ->notEmpty('senhacred');

        $validator
            ->scalar('nrend2')
            ->maxLength('nrend2', 12)
            ->requirePresence('nrend2', 'create')
            ->notEmpty('nrend2');

        $validator
            ->scalar('e_mail')
            ->maxLength('e_mail', 100)
            ->requirePresence('e_mail', 'create')
            ->notEmpty('e_mail');

        $validator
            ->scalar('cod_reg_trib')
            ->maxLength('cod_reg_trib', 1)
            ->requirePresence('cod_reg_trib', 'create')
            ->notEmpty('cod_reg_trib');

        $validator
            ->scalar('tipocad')
            ->maxLength('tipocad', 1)
            ->requirePresence('tipocad', 'create')
            ->notEmpty('tipocad');

        $validator
            ->scalar('st_liminar')
            ->maxLength('st_liminar', 1)
            ->requirePresence('st_liminar', 'create')
            ->notEmpty('st_liminar');

        $validator
            ->integer('tabela_preco')
            ->requirePresence('tabela_preco', 'create')
            ->notEmpty('tabela_preco');

        $validator
            ->integer('id_convenio')
            ->requirePresence('id_convenio', 'create')
            ->notEmpty('id_convenio');

        $validator
            ->scalar('nr_convenio')
            ->maxLength('nr_convenio', 100)
            ->requirePresence('nr_convenio', 'create')
            ->notEmpty('nr_convenio');

        $validator
            ->integer('cod_ctardz')
            ->requirePresence('cod_ctardz', 'create')
            ->notEmpty('cod_ctardz');

        $validator
            ->integer('dia_corte')
            ->requirePresence('dia_corte', 'create')
            ->notEmpty('dia_corte');

        $validator
            ->integer('dia_vencimento')
            ->requirePresence('dia_vencimento', 'create')
            ->notEmpty('dia_vencimento');

        $validator
            ->scalar('protestar')
            ->maxLength('protestar', 1)
            ->requirePresence('protestar', 'create')
            ->notEmpty('protestar');

        $validator
            ->integer('dias_protestar')
            ->requirePresence('dias_protestar', 'create')
            ->notEmpty('dias_protestar');

        $validator
            ->scalar('cpais')
            ->maxLength('cpais', 4)
            ->requirePresence('cpais', 'create')
            ->notEmpty('cpais');

        $validator
            ->scalar('trilha1')
            ->maxLength('trilha1', 20)
            ->requirePresence('trilha1', 'create')
            ->notEmpty('trilha1');

        $validator
            ->scalar('trilha2')
            ->maxLength('trilha2', 20)
            ->requirePresence('trilha2', 'create')
            ->notEmpty('trilha2');

        $validator
            ->scalar('trilha3')
            ->maxLength('trilha3', 20)
            ->requirePresence('trilha3', 'create')
            ->notEmpty('trilha3');

        return $validator;
    }
}