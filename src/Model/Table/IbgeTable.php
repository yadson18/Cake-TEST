<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ibge Model
 *
 * @method \App\Model\Entity\Ibge get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ibge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ibge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ibge|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ibge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ibge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ibge findOrCreate($search, callable $callback = null, $options = [])
 */
class IbgeTable extends Table
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

        $this->setTable('ibge');
        $this->setDisplayField('cod_mun');
        $this->setPrimaryKey('cod_mun');
    }

    public static function defaultConnectionName() {
        return 'sricash';
    }

    public function listaEstados()
    {
        return $this->find()->select(['sigla'])
            ->distinct('sigla')
            ->toArray();
    }

    public function listaMunicipios(string $sigla)
    {
        return $this->find()->select(['nome_municipio'])
            ->where(['sigla' => $sigla])
            ->toArray();
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
            ->integer('cod_mun')
            ->allowEmpty('cod_mun', 'create');

        $validator
            ->scalar('nome_municipio')
            ->maxLength('nome_municipio', 35)
            ->requirePresence('nome_municipio', 'create')
            ->notEmpty('nome_municipio');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 25)
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        $validator
            ->scalar('sigla')
            ->maxLength('sigla', 2)
            ->requirePresence('sigla', 'create')
            ->notEmpty('sigla');

        $validator
            ->integer('cod_uf')
            ->requirePresence('cod_uf', 'create')
            ->notEmpty('cod_uf');

        return $validator;
    }
}
