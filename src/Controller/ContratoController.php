<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contrato Controller
 *
 * @property \App\Model\Table\ContratoTable $Contrato
 *
 * @method \App\Model\Entity\Contrato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContratoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        //$contrato = $this->Contrato->find('all')->toArray();
        //$contrato = $this->paginate($this->Contrato);

        debug($this->Contrato->find('all')->toArray());

        $this->set(compact('contrato'));
    }

    /**
     * View method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contrato = $this->Contrato->get($id, [
            'contain' => []
        ]);

        $this->set('contrato', $contrato);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contrato = $this->Contrato->newEntity();
        if ($this->request->is('post')) {
            $contrato = $this->Contrato->patchEntity($contrato, $this->request->getData());
            if ($this->Contrato->save($contrato)) {
                $this->Flash->success(__('The contrato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contrato could not be saved. Please, try again.'));
        }
        $this->set(compact('contrato'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contrato = $this->Contrato->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contrato = $this->Contrato->patchEntity($contrato, $this->request->getData());
            if ($this->Contrato->save($contrato)) {
                $this->Flash->success(__('The contrato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contrato could not be saved. Please, try again.'));
        }
        $this->set(compact('contrato'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contrato id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contrato = $this->Contrato->get($id);
        if ($this->Contrato->delete($contrato)) {
            $this->Flash->success(__('The contrato has been deleted.'));
        } else {
            $this->Flash->error(__('The contrato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        return true;
    }
}
