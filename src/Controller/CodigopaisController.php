<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Codigopais Controller
 *
 * @property \App\Model\Table\CodigopaisTable $Codigopais
 *
 * @method \App\Model\Entity\Codigopai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CodigopaisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $codigopais = $this->paginate($this->Codigopais);

        $this->set(compact('codigopais'));
    }

    /**
     * View method
     *
     * @param string|null $id Codigopai id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $codigopai = $this->Codigopais->get($id, [
            'contain' => []
        ]);

        $this->set('codigopai', $codigopai);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $codigopai = $this->Codigopais->newEntity();
        if ($this->request->is('post')) {
            $codigopai = $this->Codigopais->patchEntity($codigopai, $this->request->getData());
            if ($this->Codigopais->save($codigopai)) {
                $this->Flash->success(__('The codigopai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codigopai could not be saved. Please, try again.'));
        }
        $this->set(compact('codigopai'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Codigopai id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $codigopai = $this->Codigopais->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $codigopai = $this->Codigopais->patchEntity($codigopai, $this->request->getData());
            if ($this->Codigopais->save($codigopai)) {
                $this->Flash->success(__('The codigopai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The codigopai could not be saved. Please, try again.'));
        }
        $this->set(compact('codigopai'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Codigopai id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $codigopai = $this->Codigopais->get($id);
        if ($this->Codigopais->delete($codigopai)) {
            $this->Flash->success(__('The codigopai has been deleted.'));
        } else {
            $this->Flash->error(__('The codigopai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
