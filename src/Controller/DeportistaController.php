<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Deportista Controller
 *
 * @property \App\Model\Table\DeportistaTable $Deportista
 */
class DeportistaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('deportista', $this->paginate($this->Deportista));
        $this->set('_serialize', ['deportista']);
    }

    /**
     * View method
     *
     * @param string|null $id Deportistum id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deportistum = $this->Deportista->get($id, [
            'contain' => []
        ]);
        $this->set('deportistum', $deportistum);
        $this->set('_serialize', ['deportistum']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deportistum = $this->Deportista->newEntity();
        if ($this->request->is('post')) {
            $deportistum = $this->Deportista->patchEntity($deportistum, $this->request->data);
            if ($this->Deportista->save($deportistum)) {
                $this->Flash->success(__('The deportistum has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The deportistum could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('deportistum'));
        $this->set('_serialize', ['deportistum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Deportistum id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deportistum = $this->Deportista->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deportistum = $this->Deportista->patchEntity($deportistum, $this->request->data);
            if ($this->Deportista->save($deportistum)) {
                $this->Flash->success(__('The deportistum has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The deportistum could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('deportistum'));
        $this->set('_serialize', ['deportistum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Deportistum id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deportistum = $this->Deportista->get($id);
        if ($this->Deportista->delete($deportistum)) {
            $this->Flash->success(__('The deportistum has been deleted.'));
        } else {
            $this->Flash->error(__('The deportistum could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
