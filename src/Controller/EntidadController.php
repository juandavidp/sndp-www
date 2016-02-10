<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entidad Controller
 *
 * @property \App\Model\Table\EntidadTable $Entidad
 */
class EntidadController extends AppController
{
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('entidad', $this->paginate($this->Entidad));
        $this->set('_serialize', ['entidad']);
    }

    /**
     * View method
     *
     * @param string|null $id Entidad id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entidad = $this->Entidad->get($id, [
            'contain' => []
        ]);
        $this->set('entidad', $entidad);
        $this->set('_serialize', ['entidad']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entidad = $this->Entidad->newEntity();
        if($this->request->is('ajax')) {
           $entidad = $this->Entidad->patchEntity($entidad, $this->request->data);
            if ($this->Entidad->save($entidad)) {
              //insert_id opcional
              $tmp=$entidad->toArray();
              $id= $tmp['idEntidad'];
              //$this->request->data['dedicacion'][i]

              //solucion chambona mejorar luego
              $detalles_dedicacion=$this->loadModel('DetallesDedicacion');
              $query = $detalles_dedicacion->query();
              for ($i=0; $i <count($this->request->data['dedicacion']); $i++) {
                  $query->insert(['dedicacion_iddedicacion', 'entidad_identidad'])
                    ->values([
                      'dedicacion_iddedicacion' => $this->request->data['dedicacion'][$i],
                      'entidad_identidad' =>  $id
                  ])
                  ->execute();
              }


                $response['status']='success';
                $response['message']='La Entidad fue guardada con exito';
                echo json_encode($response);
                die;
            } else {
                //obtenemos los errores
                $errores=$entidad->errors();
                //conseguimos el msj con el error
                $campo_con_error=$this->validador_campos($errores);
                $response=array();
                $response['status']='error';
                $response['message']=$campo_con_error;
                echo json_encode($response);
                die;
            }
        }
        //obtengo los nombres y id de la dedicacion
        $dedicacion=$this->loadModel('dedicacion');
        //paso la consulta a un array
        $datadedicacion = $dedicacion->find('all')->toArray();
        $this->set('dedicacion',$datadedicacion);

        //obtengo los nombres y id de los usuarios
        $usuario=$this->loadModel('usuario');
        //paso la consulta a un array
        $data = $usuario->find('all')->toArray();
        $this->set('usuario',$data);
        $this->set('_serialize', ['usuario']);
    }

    /*
    *la funcion validador_campos retorna el mensaje con el error de determinado campo
    *las traducciones se hicieron en vendor/cakephp/cakephp/src/Validation.php
    **/
    function validador_campos($errores){
      $campos=array("nombre","telefono","municipio","direccion");
      $campo_con_error="";
      foreach ($campos as $campo ) {
        //verificamos que el campo exista
          if (isset($errores[$campo])){

             foreach ($errores[$campo] as $error) {
                $campo_con_error="El campo ".$campo." ".$error;
                //mostramos un solo error
                break;
             }
             //mostramos un solo error
             break;
          }
      }
      if($campo_con_error==""){
        $campo_con_error="El registro no pudo ser guardado";
      }
      return $campo_con_error;
    }

    /**
     * Edit method
     *
     * @param string|null $id Entidad id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entidad = $this->Entidad->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entidad = $this->Entidad->patchEntity($entidad, $this->request->data);
            if ($this->Entidad->save($entidad)) {
                $this->Flash->success(__('The entidad has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entidad could not be saved. Please, try again.'));
            }
        }

        //obtengo los nombres y id de la dedicacion
        $dedicacion=$this->loadModel('dedicacion');
        //paso la consulta a un array
        $datadedicacion = $dedicacion->find('all')->toArray();
        $this->set('dedicacion',$datadedicacion);

        //obtengo los nombres y id de los usuarios
        $usuario=$this->loadModel('usuario');

        //paso la consulta a un array
        $data = $usuario->find('all')->toArray();
        $this->set('usuario',$data);
        $this->set(compact('entidad'));
        $this->set('_serialize', ['entidad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entidad id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entidad = $this->Entidad->get($id);
        if ($this->Entidad->delete($entidad)) {
            $this->Flash->success(__('The entidad has been deleted.'));
        } else {
            $this->Flash->error(__('The entidad could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
