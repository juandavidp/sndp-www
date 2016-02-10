<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DetallesDedicacion Controller
 *
 * @property \App\Model\Table\DetallesDedicacionTable $DetallesDedicacion
 */
class DetallesDedicacionController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('detallesDedicacion', $this->paginate($this->DetallesDedicacion));
        $this->set('_serialize', ['detallesDedicacion']);
    }

    /**
     * View method
     *
     * @param string|null $id Detalles Dedicacion id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $detallesDedicacion = $this->DetallesDedicacion->get($id, [
            'contain' => []
        ]);
        $this->set('detallesDedicacion', $detallesDedicacion);
        $this->set('_serialize', ['detallesDedicacion']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($data)
    {
      $detallesDedicacionTable = TableRegistry::get('DetallesDedicacion');
      $detalles_dedicacion = $detallesDedicacionTable->newEntity();

      $detalles_dedicacion->dedicacion_iddedicacion = $data['dedicacion'][i];
      $detalles_dedicacion->dedicacion_idEntidad = '1';

      $detallesDedicacionTable->save($detalles_dedicacion);
        /*$detallesDedicacion = $this->DetallesDedicacion->newEntity();
        if ($this->request->is('post')) {
            $detallesDedicacion = $this->DetallesDedicacion->patchEntity($detallesDedicacion, $this->request->data);
            if ($this->DetallesDedicacion->save($detallesDedicacion)) {
                $this->Flash->success(__('The detalles dedicacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The detalles dedicacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('detallesDedicacion'));
        $this->set('_serialize', ['detallesDedicacion']);*/
    }

    /**
     * Edit method
     *
     * @param string|null $id Detalles Dedicacion id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $detallesDedicacion = $this->DetallesDedicacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $detallesDedicacion = $this->DetallesDedicacion->patchEntity($detallesDedicacion, $this->request->data);
            if ($this->DetallesDedicacion->save($detallesDedicacion)) {
                $this->Flash->success(__('The detalles dedicacion has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The detalles dedicacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('detallesDedicacion'));
        $this->set('_serialize', ['detallesDedicacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Detalles Dedicacion id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $detallesDedicacion = $this->DetallesDedicacion->get($id);
        if ($this->DetallesDedicacion->delete($detallesDedicacion)) {
            $this->Flash->success(__('The detalles dedicacion has been deleted.'));
        } else {
            $this->Flash->error(__('The detalles dedicacion could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
