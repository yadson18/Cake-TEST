<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contas Model
 *
 * @method \App\Model\Entity\Conta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Conta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conta findOrCreate($search, callable $callback = null, $options = [])
 */
class ContasTable extends Table
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

        $this->setTable('contas');
        $this->setDisplayField('seq');
        $this->setPrimaryKey('seq');
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
            ->integer('seq')
            ->allowEmpty('seq', 'create');

        $validator
            ->integer('responsavel')
            ->requirePresence('responsavel', 'create')
            ->notEmpty('responsavel');

        $validator
            ->date('data_emissao')
            ->requirePresence('data_emissao', 'create')
            ->notEmpty('data_emissao');

        $validator
            ->date('data_venc')
            ->requirePresence('data_venc', 'create')
            ->notEmpty('data_venc');

        $validator
            ->date('data_pagamento')
            ->requirePresence('data_pagamento', 'create')
            ->notEmpty('data_pagamento');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 600)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->integer('valor')
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');

        $validator
            ->integer('juros')
            ->requirePresence('juros', 'create')
            ->notEmpty('juros');

        $validator
            ->integer('multa')
            ->requirePresence('multa', 'create')
            ->notEmpty('multa');

        $validator
            ->integer('desconto')
            ->requirePresence('desconto', 'create')
            ->notEmpty('desconto');

        $validator
            ->scalar('integral')
            ->maxLength('integral', 1)
            ->requirePresence('integral', 'create')
            ->notEmpty('integral');

        $validator
            ->scalar('documento')
            ->maxLength('documento', 10)
            ->requirePresence('documento', 'create')
            ->notEmpty('documento');

        $validator
            ->scalar('cfop')
            ->maxLength('cfop', 4)
            ->requirePresence('cfop', 'create')
            ->notEmpty('cfop');

        $validator
            ->integer('tipo_movimento')
            ->requirePresence('tipo_movimento', 'create')
            ->notEmpty('tipo_movimento');

        $validator
            ->scalar('cancelado')
            ->maxLength('cancelado', 1)
            ->requirePresence('cancelado', 'create')
            ->notEmpty('cancelado');

        $validator
            ->scalar('plano_conta')
            ->maxLength('plano_conta', 11)
            ->requirePresence('plano_conta', 'create')
            ->notEmpty('plano_conta');

        $validator
            ->integer('tipo_cobranca')
            ->requirePresence('tipo_cobranca', 'create')
            ->notEmpty('tipo_cobranca');

        $validator
            ->integer('empresa')
            ->requirePresence('empresa', 'create')
            ->notEmpty('empresa');

        $validator
            ->integer('forma_pagamento')
            ->requirePresence('forma_pagamento', 'create')
            ->notEmpty('forma_pagamento');

        $validator
            ->integer('comissao')
            ->requirePresence('comissao', 'create')
            ->notEmpty('comissao');

        $validator
            ->integer('valor_pago')
            ->requirePresence('valor_pago', 'create')
            ->notEmpty('valor_pago');

        $validator
            ->date('data_comissao')
            ->requirePresence('data_comissao', 'create')
            ->notEmpty('data_comissao');

        $validator
            ->integer('total_pagar')
            ->requirePresence('total_pagar', 'create')
            ->notEmpty('total_pagar');

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
            ->scalar('tipo_conta')
            ->maxLength('tipo_conta', 1)
            ->requirePresence('tipo_conta', 'create')
            ->notEmpty('tipo_conta');

        $validator
            ->integer('cod_colaborador')
            ->requirePresence('cod_colaborador', 'create')
            ->notEmpty('cod_colaborador');

        $validator
            ->integer('sintetico')
            ->requirePresence('sintetico', 'create')
            ->notEmpty('sintetico');

        $validator
            ->integer('analitico')
            ->requirePresence('analitico', 'create')
            ->notEmpty('analitico');

        $validator
            ->integer('centro_custo')
            ->requirePresence('centro_custo', 'create')
            ->notEmpty('centro_custo');

        $validator
            ->integer('seq_banco')
            ->requirePresence('seq_banco', 'create')
            ->notEmpty('seq_banco');

        $validator
            ->scalar('nr_cheque')
            ->maxLength('nr_cheque', 10)
            ->requirePresence('nr_cheque', 'create')
            ->notEmpty('nr_cheque');

        $validator
            ->integer('cod_finalizadora')
            ->requirePresence('cod_finalizadora', 'create')
            ->notEmpty('cod_finalizadora');

        $validator
            ->scalar('caixa')
            ->maxLength('caixa', 4)
            ->requirePresence('caixa', 'create')
            ->notEmpty('caixa');

        $validator
            ->scalar('nosso_numero')
            ->maxLength('nosso_numero', 15)
            ->requirePresence('nosso_numero', 'create')
            ->notEmpty('nosso_numero');

        $validator
            ->scalar('lote_remessa')
            ->maxLength('lote_remessa', 6)
            ->requirePresence('lote_remessa', 'create')
            ->notEmpty('lote_remessa');

        return $validator;
    }
}
