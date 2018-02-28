<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContratoSerie Model
 *
 * @method \App\Model\Entity\ContratoSerie get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContratoSerie newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ContratoSerie[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContratoSerie|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContratoSerie patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContratoSerie[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContratoSerie findOrCreate($search, callable $callback = null, $options = [])
 */
class ContratoSerieTable extends Table
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
        
        $this->setTable('contrato_serie');
        $this->setDisplayField('serie_impressora');
        $this->setPrimaryKey('serie_impressora');
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
            ->integer('seq_contrato')
            ->requirePresence('seq_contrato', 'create')
            ->notEmpty('seq_contrato');

        $validator
            ->scalar('serie_impressora')
            ->maxLength('serie_impressora', 30)
            ->allowEmpty('serie_impressora', 'create');

        $validator
            ->integer('numero_ecf')
            ->requirePresence('numero_ecf', 'create')
            ->notEmpty('numero_ecf');

        $validator
            ->scalar('modelo_impressora')
            ->maxLength('modelo_impressora', 12)
            ->requirePresence('modelo_impressora', 'create')
            ->notEmpty('modelo_impressora');

        $validator
            ->integer('dias')
            ->requirePresence('dias', 'create')
            ->notEmpty('dias');

        $validator
            ->date('ultima_renovacao')
            ->requirePresence('ultima_renovacao', 'create')
            ->notEmpty('ultima_renovacao');

        $validator
            ->scalar('atualizar')
            ->maxLength('atualizar', 1)
            ->requirePresence('atualizar', 'create')
            ->notEmpty('atualizar');

        $validator
            ->scalar('online')
            ->maxLength('online', 1)
            ->requirePresence('online', 'create')
            ->notEmpty('online');

        return $validator;
    }
}
