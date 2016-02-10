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
        $deportista = $this->Deportista->get($id, [
            'contain' => []
        ]);
        $this->set('deportista', $deportista);
        $this->set('_serialize', ['deportista']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deportista = $this->Deportista->newEntity();
        if ($this->request->is('post')) {
            $deportista = $this->Deportista->patchEntity($deportista, $this->request->data);
            if ($this->Deportista->save($deportista)) {
                $this->Flash->success(__('Este deportista a sido guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Este deportista no pudo ser registrado.'));
            }
        }
        $this->set(compact('deportista'));
        $this->set('_serialize', ['deportista']);
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
        $deportista = $this->Deportista->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deportista = $this->Deportista->patchEntity($deportista, $this->request->data);
            if ($this->Deportista->save($deportista)) {
                $this->Flash->success(__('Este deportista a sido guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Este deportista no pudo ser guardado.'));
            }
        }
        $this->set(compact('deportista'));
        $this->set('_serialize', ['deportista']);
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
        $deportista = $this->Deportista->get($id);
        if ($this->Deportista->delete($deportista)) {
            $this->Flash->success(__('Este deportista fue  eliminado.'));
        } else {
            $this->Flash->error(__('Este deporstista no pudo ser eliminado.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
