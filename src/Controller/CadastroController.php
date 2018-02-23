<?php
namespace App\Controller;

use App\Controller\AppController;
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
        $this->paginate = [
            'limit' => 100,
            'order' => [
                'Cadastro.razao' => 'asc',
                'Cadastro.cod_cadastro' => 'asc'
            ]
        ];
        $cadastro = $this->paginate($this->Cadastro);

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
        $this->set('title', 'Dados do cliente');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadastro = $this->Cadastro->newEntity();
        if ($this->request->is('post')) {
            $cadastro = $this->Cadastro->patchEntity($cadastro, $this->request->getData());
            if ($this->Cadastro->save($cadastro)) {
                $this->Flash->success(__('The cadastro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cadastro could not be saved. Please, try again.'));
        }
        $this->set(compact('cadastro'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cadastro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadastro = $this->Cadastro->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadastro = $this->Cadastro->patchEntity($cadastro, $this->request->getData());
            if ($this->Cadastro->save($cadastro)) {
                $this->Flash->success(__('The cadastro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cadastro could not be saved. Please, try again.'));
        }
        $this->set(compact('cadastro'));
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
        if ($this->Cadastro->delete($cadastro)) {
            $this->Flash->success(__('The cadastro has been deleted.'));
        } else {
            $this->Flash->error(__('The cadastro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        return true;
    }
}
