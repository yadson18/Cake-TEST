<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Codigopais Model
 *
 * @method \App\Model\Entity\Codigopai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Codigopai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Codigopai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Codigopai|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Codigopai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Codigopai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Codigopai findOrCreate($search, callable $callback = null, $options = [])
 */
class CodigopaisTable extends Table
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

        $this->setTable('codigopais');
        $this->setDisplayField('cpais');
        $this->setPrimaryKey('cpais');
    }

    public static function defaultConnectionName() {
        return 'sricash';
    }

    public function listaPaises()
    {
        return $this->find('all')->toArray();
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
            ->scalar('cpais')
            ->maxLength('cpais', 4)
            ->allowEmpty('cpais', 'create');

        $validator
            ->scalar('xpais')
            ->maxLength('xpais', 60)
            ->requirePresence('xpais', 'create')
            ->notEmpty('xpais');

        return $validator;
    }
}
