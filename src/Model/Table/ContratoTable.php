<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contrato Model
 *
 * @method \App\Model\Entity\Contrato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contrato newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contrato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contrato|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contrato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contrato[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contrato findOrCreate($search, callable $callback = null, $options = [])
 */
class ContratoTable extends Table
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

        $this->setTable('contrato');
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
            ->date('data_vencimento')
            ->requirePresence('data_vencimento', 'create')
            ->notEmpty('data_vencimento');

        $validator
            ->integer('contratante')
            ->requirePresence('contratante', 'create')
            ->notEmpty('contratante');

        $validator
            ->date('data_inclusao')
            ->requirePresence('data_inclusao', 'create')
            ->notEmpty('data_inclusao');

        $validator
            ->date('data_ativacao')
            ->requirePresence('data_ativacao', 'create')
            ->notEmpty('data_ativacao');

        $validator
            ->integer('valor_contrato')
            ->requirePresence('valor_contrato', 'create')
            ->notEmpty('valor_contrato');

        $validator
            ->date('data_ultima_cobranca')
            ->requirePresence('data_ultima_cobranca', 'create')
            ->notEmpty('data_ultima_cobranca');

        $validator
            ->date('data_ultima_renovacao')
            ->requirePresence('data_ultima_renovacao', 'create')
            ->notEmpty('data_ultima_renovacao');

        $validator
            ->scalar('obs')
            ->maxLength('obs', 100)
            ->requirePresence('obs', 'create')
            ->notEmpty('obs');

        $validator
            ->integer('modalidade')
            ->requirePresence('modalidade', 'create')
            ->notEmpty('modalidade');

        $validator
            ->scalar('razao_social')
            ->maxLength('razao_social', 60)
            ->requirePresence('razao_social', 'create')
            ->notEmpty('razao_social');

        $validator
            ->scalar('fantasia')
            ->maxLength('fantasia', 60)
            ->requirePresence('fantasia', 'create')
            ->notEmpty('fantasia');

        $validator
            ->scalar('dia_vencimento')
            ->maxLength('dia_vencimento', 2)
            ->requirePresence('dia_vencimento', 'create')
            ->notEmpty('dia_vencimento');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->integer('seq_banco')
            ->requirePresence('seq_banco', 'create')
            ->notEmpty('seq_banco');

        $validator
            ->integer('master')
            ->requirePresence('master', 'create')
            ->notEmpty('master');

        $validator
            ->integer('analitico')
            ->requirePresence('analitico', 'create')
            ->notEmpty('analitico');

        $validator
            ->integer('sintetico')
            ->requirePresence('sintetico', 'create')
            ->notEmpty('sintetico');

        $validator
            ->integer('cod_resp_financeiro')
            ->requirePresence('cod_resp_financeiro', 'create')
            ->notEmpty('cod_resp_financeiro');

        $validator
            ->integer('valor_comissao')
            ->requirePresence('valor_comissao', 'create')
            ->notEmpty('valor_comissao');

        $validator
            ->scalar('sintegra')
            ->maxLength('sintegra', 1)
            ->requirePresence('sintegra', 'create')
            ->notEmpty('sintegra');

        $validator
            ->scalar('efd')
            ->maxLength('efd', 1)
            ->requirePresence('efd', 'create')
            ->notEmpty('efd');

        $validator
            ->scalar('nota_fiscal_eletronica')
            ->maxLength('nota_fiscal_eletronica', 1)
            ->requirePresence('nota_fiscal_eletronica', 'create')
            ->notEmpty('nota_fiscal_eletronica');

        $validator
            ->integer('num_termi_adm')
            ->requirePresence('num_termi_adm', 'create')
            ->notEmpty('num_termi_adm');

        $validator
            ->scalar('hardware')
            ->maxLength('hardware', 1)
            ->requirePresence('hardware', 'create')
            ->notEmpty('hardware');

        $validator
            ->integer('cod_vendedor')
            ->requirePresence('cod_vendedor', 'create')
            ->notEmpty('cod_vendedor');

        $validator
            ->date('data_cancelamento')
            ->requirePresence('data_cancelamento', 'create')
            ->notEmpty('data_cancelamento');

        $validator
            ->scalar('cancelado')
            ->maxLength('cancelado', 1)
            ->requirePresence('cancelado', 'create')
            ->notEmpty('cancelado');

        $validator
            ->integer('tipo_envio')
            ->requirePresence('tipo_envio', 'create')
            ->notEmpty('tipo_envio');

        return $validator;
    }
}
