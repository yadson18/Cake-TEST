<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

/**
 * Colaborador Model
 *
 * @method \App\Model\Entity\Colaborador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Colaborador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Colaborador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Colaborador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Colaborador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Colaborador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Colaborador findOrCreate($search, callable $callback = null, $options = [])
 */
class ColaboradorTable extends Table
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

        $this->setTable('colaborador');
        $this->setDisplayField('cod_colaborador');
        $this->setPrimaryKey('cod_colaborador');
    }

    public static function defaultConnectionName() {
        return 'sricash2';
    }

    public function validarLogin(array $dados)
    {
        if (isset($dados['nome']) && isset($dados['senha'])) {
            return $this->find()
                ->select(['cod_cadastro', 'nome', 'senha'])
                ->where([
                    'nome' => $dados['nome'], 
                    'senha' => $dados['senha']
                ])
                ->first();
        }
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
            ->integer('cod_colaborador')
            ->allowEmpty('cod_colaborador', 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 30)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->integer('funcao')
            ->requirePresence('funcao', 'create')
            ->notEmpty('funcao');

        $validator
            ->numeric('comissao')
            ->requirePresence('comissao', 'create')
            ->notEmpty('comissao');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 30)
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 13)
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 15)
            ->requirePresence('rg', 'create')
            ->notEmpty('rg');

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
            ->scalar('cidade')
            ->maxLength('cidade', 30)
            ->requirePresence('cidade', 'create')
            ->notEmpty('cidade');

        $validator
            ->scalar('uf')
            ->maxLength('uf', 2)
            ->requirePresence('uf', 'create')
            ->notEmpty('uf');

        $validator
            ->scalar('acesso')
            ->maxLength('acesso', 100)
            ->requirePresence('acesso', 'create')
            ->notEmpty('acesso');

        $validator
            ->scalar('login')
            ->maxLength('login', 20)
            ->requirePresence('login', 'create')
            ->notEmpty('login');

        $validator
            ->scalar('senha')
            ->maxLength('senha', 12)
            ->requirePresence('senha', 'create')
            ->notEmpty('senha');

        $validator
            ->scalar('ativo')
            ->maxLength('ativo', 1)
            ->requirePresence('ativo', 'create')
            ->notEmpty('ativo');

        $validator
            ->integer('cod_cadastro')
            ->requirePresence('cod_cadastro', 'create')
            ->notEmpty('cod_cadastro');

        $validator
            ->scalar('conectado')
            ->maxLength('conectado', 1)
            ->requirePresence('conectado', 'create')
            ->notEmpty('conectado');

        $validator
            ->scalar('local')
            ->maxLength('local', 50)
            ->requirePresence('local', 'create')
            ->notEmpty('local');

        $validator
            ->scalar('acesso2')
            ->maxLength('acesso2', 100)
            ->requirePresence('acesso2', 'create')
            ->notEmpty('acesso2');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['login']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
