<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RegistroDeportivo Controller
 *
 * @property \App\Model\Table\RegistroDeportivoTable $RegistroDeportivo
 */
class RegistroDeportivoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('registroDeportivo', $this->paginate($this->RegistroDeportivo));
        $this->set('_serialize', ['registroDeportivo']);
    }

    /**
     * View method
     *
     * @param string|null $id Registro Deportivo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registroDeportivo = $this->RegistroDeportivo->get($id, [
            'contain' => []
        ]);
        $this->set('registroDeportivo', $registroDeportivo);
        $this->set('_serialize', ['registroDeportivo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registroDeportivo = $this->RegistroDeportivo->newEntity();
        if ($this->request->is('post')) {
            $registroDeportivo = $this->RegistroDeportivo->patchEntity($registroDeportivo, $this->request->data);
            if ($this->RegistroDeportivo->save($registroDeportivo)) {
                $this->Flash->success(__('The registro deportivo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The registro deportivo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('registroDeportivo'));
        $this->set('_serialize', ['registroDeportivo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Registro Deportivo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registroDeportivo = $this->RegistroDeportivo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $registroDeportivo = $this->RegistroDeportivo->patchEntity($registroDeportivo, $this->request->data);
            if ($this->RegistroDeportivo->save($registroDeportivo)) {
                $this->Flash->success(__('The registro deportivo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The registro deportivo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('registroDeportivo'));
        $this->set('_serialize', ['registroDeportivo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Registro Deportivo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registroDeportivo = $this->RegistroDeportivo->get($id);
        if ($this->RegistroDeportivo->delete($registroDeportivo)) {
            $this->Flash->success(__('The registro deportivo has been deleted.'));
        } else {
            $this->Flash->error(__('The registro deportivo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
