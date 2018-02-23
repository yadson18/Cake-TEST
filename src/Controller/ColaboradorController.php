<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Colaborador Controller
 *
 * @property \App\Model\Table\ColaboradorTable $Colaborador
 *
 * @method \App\Model\Entity\Colaborador[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ColaboradorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $colaborador = $this->paginate($this->Colaborador);

        $this->set(compact('colaborador'));
    }

    /**
     * View method
     *
     * @param string|null $id Colaborador id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colaborador = $this->Colaborador->get($id, [
            'contain' => []
        ]);

        $this->set('colaborador', $colaborador);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colaborador = $this->Colaborador->newEntity();
        if ($this->request->is('post')) {
            $colaborador = $this->Colaborador->patchEntity($colaborador, $this->request->getData());
            if ($this->Colaborador->save($colaborador)) {
                $this->Flash->success(__('The colaborador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colaborador could not be saved. Please, try again.'));
        }
        $this->set(compact('colaborador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Colaborador id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colaborador = $this->Colaborador->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colaborador = $this->Colaborador->patchEntity($colaborador, $this->request->getData());
            if ($this->Colaborador->save($colaborador)) {
                $this->Flash->success(__('The colaborador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colaborador could not be saved. Please, try again.'));
        }
        $this->set(compact('colaborador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Colaborador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colaborador = $this->Colaborador->get($id);
        if ($this->Colaborador->delete($colaborador)) {
            $this->Flash->success(__('The colaborador has been deleted.'));
        } else {
            $this->Flash->error(__('The colaborador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        if ($this->Auth->user()){
            return $this->redirect($this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {
            $colaborador = $this->Colaborador->validarLogin($this->request->getData());
            if ($colaborador) {
                $this->Auth->setUser($colaborador);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuário ou senha incorretos, tente novamente.'));
        }
        $this->set('title', 'Entrar');
    }

    public function logout()
    {
        $this->Flash->success(__('A sessão foi encerrada com sucesso.'));
        return $this->redirect($this->Auth->logout());
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'logout']);
    }

    public function isAuthorized($user)
    {
        return false;
    }
}
