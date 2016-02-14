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
      //$miidesession=$_Session['idEntidad'];
        $miidesession = $this->request->session()->read('idEntidad');
        
         //obtengo los nombres y id de las entidades
        $entidad=$this->loadModel('entidad');
        $deportista=$this->loadModel('deportista');
        $datos = $this->Deportista->find('all')->where(['entidad_idEntidad' => $miidesession])->toArray();
       
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
        
        $id_deportista = $deportista -> iddeportista;
        
        $miidesession = $this->request->session()->read('idEntidad');
        $buscardeporte_actividad =$deportista->deporte_iddeporte;
        
         //obtengo los nombres y id de los diferentes registros
        $registro_deportivo=$this->loadModel('registroDeportivo');
        $regisDeporte = $registro_deportivo->find('all')->where(['deportista_iddeportista' => $id_deportista])->toArray();
        $this->set('registroDeportivo',$regisDeporte);
        $this->set('_serialize', ['registroDeportivo']);
        
          //obtengo los nombres y id de los diferentes deportes
        $deporte_actividad=$this->loadModel('deporte_actividad');
        $actividadSeleccionada = $deporte_actividad->find('all')->where(['deporte_actividad.iddeporte' => $buscardeporte_actividad])->toArray();
        $this->set('deporte_actividad',$actividadSeleccionada);
        $this->set('_serialize', ['deporte_actividad']);

        
        
        
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
            $deportista->entidad_idEntidad=$_SESSION['idEntidad'];
            if ($this->Deportista->save($deportista)) {
                $this->Flash->success(__('Este deportista a sido guardado.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Este deportista no pudo ser registrado.'));
              var_export($deporstista->errors());
            }
        }
        $this->set(compact('deportista'));
        $this->set('_serialize', ['deportista']);
    
        
         $deporte=$this->loadModel('deporte_actividad');
        //paso la consulta a un array
        $datadeporte = $deporte->find('all')->toArray();
        $this->set('deportes',$datadeporte);
        
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
        
        $buscardeporte = $deportista->deporte_iddeporte;
   
        $deporte=$this->loadModel('deporte_actividad');
        
        
        $datosDeporte = $deporte->find('all')->where(['deporte_actividad.iddeporte' => $buscardeporte])->toArray();
        $this->set('deporte_actividad',$datosDeporte);
        $this->set('_serialize', ['deporte_actividad']);
        //paso la consulta a un array
        $datadeporte = $deporte->find('all')->toArray();
        $this->set('deporte_actividades',$datadeporte);
        $this->set('_serialize', ['deporte_actividades']);
   
   
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
