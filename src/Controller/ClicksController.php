<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clicks Controller
 *
 * @property \App\Model\Table\ClicksTable $Clicks
 */
class ClicksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clicks']
        ];
        $clicks = $this->paginate($this->Clicks);

        $this->set(compact('clicks'));
        $this->set('_serialize', ['clicks']);
    }

    /**
     * View method
     *
     * @param string|null $id Click id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $click = $this->Clicks->get($id, [
            'contain' => ['Clicks']
        ]);

        $this->set('click', $click);
        $this->set('_serialize', ['click']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $click = $this->Clicks->newEntity();
        if ($this->request->is('post')) {
            $click = $this->Clicks->patchEntity($click, $this->request->data);
            if ($this->Clicks->save($click)) {
                $this->Flash->success(__('The click has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The click could not be saved. Please, try again.'));
            }
        }
        $clicks = $this->Clicks->Clicks->find('list', ['limit' => 200]);
        $this->set(compact('click', 'clicks'));
        $this->set('_serialize', ['click']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Click id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $click = $this->Clicks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $click = $this->Clicks->patchEntity($click, $this->request->data);
            if ($this->Clicks->save($click)) {
                $this->Flash->success(__('The click has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The click could not be saved. Please, try again.'));
            }
        }
        $clicks = $this->Clicks->Clicks->find('list', ['limit' => 200]);
        $this->set(compact('click', 'clicks'));
        $this->set('_serialize', ['click']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Click id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $click = $this->Clicks->get($id);
        if ($this->Clicks->delete($click)) {
            $this->Flash->success(__('The click has been deleted.'));
        } else {
            $this->Flash->error(__('The click could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
