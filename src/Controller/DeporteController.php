<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Deporte Controller
 *
 * @property \App\Model\Table\DeporteTable $Deporte
 */
class DeporteController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('deporte', $this->paginate($this->Deporte));
        $this->set('_serialize', ['deporte']);
    }

    /**
     * View method
     *
     * @param string|null $id Deporte id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deporte = $this->Deporte->get($id, [
            'contain' => []
        ]);
        $this->set('deporte', $deporte);
        $this->set('_serialize', ['deporte']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deporte = $this->Deporte->newEntity();
        if ($this->request->is('post')) {
            $deporte = $this->Deporte->patchEntity($deporte, $this->request->data);
            if ($this->Deporte->save($deporte)) {
                $this->Flash->success(__('The deporte has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The deporte could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('deporte'));
        $this->set('_serialize', ['deporte']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Deporte id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deporte = $this->Deporte->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deporte = $this->Deporte->patchEntity($deporte, $this->request->data);
            if ($this->Deporte->save($deporte)) {
                $this->Flash->success(__('The deporte has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The deporte could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('deporte'));
        $this->set('_serialize', ['deporte']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Deporte id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deporte = $this->Deporte->get($id);
        if ($this->Deporte->delete($deporte)) {
            $this->Flash->success(__('The deporte has been deleted.'));
        } else {
            $this->Flash->error(__('The deporte could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
