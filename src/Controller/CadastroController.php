<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;

/**
 * Cadastro Controller
 *
 * @property \App\Model\Table\CadastroTable $Cadastro
 *
 * @method \App\Model\Entity\Cadastro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadastroController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = ['limit' => 100];
        $cadastro = $this->paginate($this->Cadastro->listaCadastrosAtivos());

        $this->set(compact('cadastro'));
        $this->set('title', 'Clientes cadastrados');
    }

    /**
     * View method
     *
     * @param string|null $id Cadastro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadastro = $this->Cadastro->get($id, [
            'contain' => []
        ]);

        $this->set('cadastro', $cadastro);
        $this->set('title', 'Dados do cadastro');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $municipios = TableRegistry::get('Ibge')->listaMunicipios('AC');
        $paises = TableRegistry::get('Codigopais')->listaPaises();
        $estados = TableRegistry::get('Ibge')->listaEstados();
        $cadastro = $this->Cadastro->newEntity();

        if ($this->request->is('post')) {
            $cadastro = $this->Cadastro->patchEntity($cadastro, $this->request->getData());
            $cadastro->cadastrado_por = $this->Auth->user('cod_colaborador');
            $cadastro->cadastrado_em = date('d.m.Y');
            $cadastro->alterado_por = $this->Auth->user('cod_colaborador');
            $cadastro->alterado_em = date('d.m.Y');
            $cadastro->ativo = 'T';

            if ($this->Cadastro->save($cadastro)) {
                $this->Flash->success(
                    __('Os dados de (' . $cadastro->razao . ') foram cadastrados com sucesso.')
                );

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error( __('Não foi possível cadastrar os dados de (' . $cadastro->razao . ').'));
        }
        $this->set(compact(['cadastro', 'paises', 'estados', 'municipios']));
        $this->set('title', 'Novo cadastro');    }

    /**
     * Edit method
     *
     * @param string|null $id Cadastro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadastro = $this->Cadastro->get($id, ['contain' => []]);
        $paises = TableRegistry::get('Codigopais')->listaPaises();
        $estados = TableRegistry::get('Ibge')->listaEstados();
        $municipios = TableRegistry::get('Ibge')->listaMunicipios($cadastro->estado);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadastro = $this->Cadastro->patchEntity($cadastro, $this->request->getData());
            $cadastro->alterado_por = $this->Auth->user('cod_colaborador');
            $cadastro->alterado_em = date('d.m.Y');

            if ($this->Cadastro->save($cadastro)) {
                $this->Flash->success(
                    __('Os dados de (' . $cadastro->razao . ') foram modificados com sucesso.')
                );

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(
                __('Não foi possível modificar os dados de (' . $cadastro->razao . ')')
            );
        }
        $this->set(compact(['cadastro', 'paises', 'estados', 'municipios']));
        $this->set('title', 'Modificar cadastro');
    }

    /**
     * Delete method
     *
     * @param string|null $id Cadastro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadastro = $this->Cadastro->get($id);
        $cadastro->alterado_por = $this->Auth->user('cod_colaborador');
        $cadastro->alterado_em = date('d.m.Y');
        $cadastro->ativo = 'F';

        if ($this->Cadastro->save($cadastro)) {
            $this->Flash->success(__('(' . $cadastro->razao . ') foi removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível remover (' . $cadastro->razao . ').'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        return true;
    }
}
