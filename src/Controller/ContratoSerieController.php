<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContratoSerie Controller
 *
 * @property \App\Model\Table\ContratoSerieTable $ContratoSerie
 *
 * @method \App\Model\Entity\ContratoSerie[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContratoSerieController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $contratoSerie = $this->paginate($this->ContratoSerie);

        $this->set(compact('contratoSerie'));
    }

    /**
     * View method
     *
     * @param string|null $id Contrato Serie id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contratoSerie = $this->ContratoSerie->get($id, [
            'contain' => []
        ]);

        $this->set('contratoSerie', $contratoSerie);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contratoSerie = $this->ContratoSerie->newEntity();
        if ($this->request->is('post')) {
            $contratoSerie = $this->ContratoSerie->patchEntity($contratoSerie, $this->request->getData());
            if ($this->ContratoSerie->save($contratoSerie)) {
                $this->Flash->success(__('The contrato serie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contrato serie could not be saved. Please, try again.'));
        }
        $this->set(compact('contratoSerie'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contrato Serie id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contratoSerie = $this->ContratoSerie->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contratoSerie = $this->ContratoSerie->patchEntity($contratoSerie, $this->request->getData());
            if ($this->ContratoSerie->save($contratoSerie)) {
                $this->Flash->success(__('The contrato serie has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contrato serie could not be saved. Please, try again.'));
        }
        $this->set(compact('contratoSerie'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contrato Serie id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contratoSerie = $this->ContratoSerie->get($id);
        if ($this->ContratoSerie->delete($contratoSerie)) {
            $this->Flash->success(__('The contrato serie has been deleted.'));
        } else {
            $this->Flash->error(__('The contrato serie could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        return true;
    }
}
