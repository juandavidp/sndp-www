<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dedicacion Controller
 *
 * @property \App\Model\Table\DedicacionTable $Dedicacion
 */
class DedicacionController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('dedicacion', $this->paginate($this->Dedicacion));
        $this->set('_serialize', ['dedicacion']);
    }

    /**
     * View method
     *
     * @param string|null $id Dedicacion id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dedicacion = $this->Dedicacion->get($id, [
            'contain' => []
        ]);
        $this->set('dedicacion', $dedicacion);
        $this->set('_serialize', ['dedicacion']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dedicacion = $this->Dedicacion->newEntity();
        if ($this->request->is('post')) {
            $dedicacion = $this->Dedicacion->patchEntity($dedicacion, $this->request->data);
            if ($this->Dedicacion->save($dedicacion)) {
                $this->Flash->success(__('The dedicacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dedicacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dedicacion'));
        $this->set('_serialize', ['dedicacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dedicacion id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dedicacion = $this->Dedicacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dedicacion = $this->Dedicacion->patchEntity($dedicacion, $this->request->data);
            if ($this->Dedicacion->save($dedicacion)) {
                $this->Flash->success(__('The dedicacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dedicacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dedicacion'));
        $this->set('_serialize', ['dedicacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dedicacion id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dedicacion = $this->Dedicacion->get($id);
        if ($this->Dedicacion->delete($dedicacion)) {
            $this->Flash->success(__('The dedicacion has been deleted.'));
        } else {
            $this->Flash->error(__('The dedicacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
