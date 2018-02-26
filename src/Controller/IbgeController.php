<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ibge Controller
 *
 * @property \App\Model\Table\IbgeTable $Ibge
 *
 * @method \App\Model\Entity\Ibge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IbgeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ibge = $this->paginate($this->Ibge);

        $this->set(compact('ibge'));
    }

    /**
     * View method
     *
     * @param string|null $id Ibge id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ibge = $this->Ibge->get($id, [
            'contain' => []
        ]);

        $this->set('ibge', $ibge);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ibge = $this->Ibge->newEntity();
        if ($this->request->is('post')) {
            $ibge = $this->Ibge->patchEntity($ibge, $this->request->getData());
            if ($this->Ibge->save($ibge)) {
                $this->Flash->success(__('The ibge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ibge could not be saved. Please, try again.'));
        }
        $this->set(compact('ibge'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ibge id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ibge = $this->Ibge->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ibge = $this->Ibge->patchEntity($ibge, $this->request->getData());
            if ($this->Ibge->save($ibge)) {
                $this->Flash->success(__('The ibge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ibge could not be saved. Please, try again.'));
        }
        $this->set(compact('ibge'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ibge id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ibge = $this->Ibge->get($id);
        if ($this->Ibge->delete($ibge)) {
            $this->Flash->success(__('The ibge has been deleted.'));
        } else {
            $this->Flash->error(__('The ibge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
