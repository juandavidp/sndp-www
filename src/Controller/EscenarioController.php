<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Escenario Controller
 *
 * @property \App\Model\Table\EscenarioTable $Escenario
 */
class EscenarioController extends AppController
{
public $paginate= array('limit'=> 5, 'order' => array('Escenario.idescenario'=> 'asc'));

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

        $escenario=$this->loadModel('escenario');
        $datos = $this->Escenario->find('all')->where(['entidad_idEntidad' => $miidesession])->toArray();
        $this->set('escenario', $this->paginate($this->Escenario));
        $this->set('escenario', $datos);
        $this->set('_serialize', ['escenario']);
    }

    /**
     * View method
     *
     * @param string|null $id Escenario id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $escenario = $this->Escenario->get($id, [
            'contain' => []
        ]);

        $miidesession = $this->request->session()->read('idEntidad');
        $buscardedicacion = $escenario->dedicacion_iddedicacion;
        $buscardeporte_actividad =$escenario->deporte_iddeporte;

        //obtengo los nombres y id de kas dedicaciones
        $dedica=$this->loadModel('dedicacion');
        // Selecciono el tipo de deporte correspondiente.
        $dataDedicacion = $dedica->find('all')->where(['dedicacion.iddedicacion' => $buscardedicacion])->toArray();
        $this->set('dedicacion',$dataDedicacion);
        $this->set('_serialize', ['dedicacion']);

        // obtengo el deporte o actividad seleccionado.
        $deporte_actividad=$this->loadModel('deporte_actividad');
        $actividadSeleccionada = $deporte_actividad->find('all')->where(['deporte_actividad.iddeporte' => $buscardeporte_actividad])->toArray();
        $this->set('deporte_actividad',$actividadSeleccionada);
        $this->set('_serialize', ['deporte_actividad']);

        //obtengo los nombres y id de las entidades
        $entidad=$this->loadModel('entidad');
        $nombreEntidad = $entidad->find('all')->where(['entidad.idEntidad' => $miidesession])->toArray();
        $this->set('entidad',$nombreEntidad);
        $this->set('_serialize', ['entidad']);

        $this->set('escenario', $escenario);
        $this->set('_serialize', ['escenario']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $escenario = $this->Escenario->newEntity();
        if ($this->request->is('post')) {
            $escenario = $this->Escenario->patchEntity($escenario, $this->request->data);
            $escenario->entidad_idEntidad = $_SESSION['idEntidad'];
            if ($this->Escenario->save($escenario)) {
                $response['status']='success';
                $response['message']='La Entidad fue guardada con exito';
                echo json_encode($response);
                die;
            } else {
                  //obtenemos los errores
                  $errores=$escenario->errors();
                  //var_export($errores);
                  //conseguimos el msj con el error
                  $campo_con_error=$this->validador_campos($errores);
                  $response=array();
                  $response['status']='error';
                  $response['message']=$campo_con_error;
                  echo json_encode($response);
                  die;
            }
        }
        $this->set(compact('escenario'));
        $this->set('_serialize', ['escenario']);

        //obtengo los nombres y id de kas dedicaciones
        $dedicacion=$this->loadModel('dedicacion');
        $dataDedicacion = $dedicacion->find('all')->toArray();
        $this->set('dedicacion',$dataDedicacion);
        $this->set('_serialize', ['dedicacion']);

        //obtengo los nombres y id de las entidades
        $entidad=$this->loadModel('entidad');
        $datas = $entidad->find('all')->toArray();
        $this->set('entidad',$datas);
        $this->set('_serialize', ['entidad']);
         
         $deporte=$this->loadModel('deporte_actividad');
        //paso la consulta a un array
        $datadeporte = $deporte->find('all')->toArray();
        $this->set('deportes',$datadeporte);
        $this->set('_serialize', ['deportes']);


    }

    /**
     * Edit method
     *
     * @param string|null $id Escenario id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $escenario = $this->Escenario->get($id, ['contain' => []]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $escenario = $this->Escenario->patchEntity($escenario, $this->request->data);

            if ($this->Escenario->save($escenario)) {
              $response['status']='success';
              $response['message']='La Entidad fue guardada con exito';
              echo json_encode($response);
              die;
            } else {
              //obtenemos los errores
              $errores=$escenario->errors();
              //var_export($errores);
              //conseguimos el msj con el error
              $campo_con_error=$this->validador_campos($errores);
              $response=array();
              $response['status']='error';
              $response['message']=$campo_con_error;
              echo json_encode($response);
              die;
            }
        }

        $buscardedicacion = $escenario->dedicacion_iddedicacion;
        $buscardeporte_actividad =$escenario->deporte_iddeporte;


        //obtengo los nombres y id de kas dedicaciones
        $dedica=$this->loadModel('dedicacion');
        // Selecciono el tipo de deporte correspondiente.
        $dataDedicacion = $dedica->find('all')->where(['dedicacion.iddedicacion' => $buscardedicacion])->toArray();
        $this->set('dedicacion',$dataDedicacion);
        $this->set('_serialize', ['dedicacion']);
        // cargo todos los tipos de deporte u actividad por si se va hacer una modificaciOn.
        $datos = $dedica->find('all');
        $this->set('dedicaciones',$datos);
        $this->set('_serialize', ['dedicaciones']);


        // obtengo el deporte o actividad seleccionado.
        $deporte_actividad=$this->loadModel('deporte_actividad');
        $actividadSeleccionada = $deporte_actividad->find('all')->where(['deporte_actividad.iddeporte' => $buscardeporte_actividad])->toArray();
        $this->set('deporte_actividad',$actividadSeleccionada);
        $this->set('_serialize', ['deporte_actividad']);

        $this->set(compact('escenario'));
        $this->set('_serialize', ['escenario']);

    }

    /**
     * Delete method
     *
     * @param string|null $id Escenario id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $escenario = $this->Escenario->get($id);
        if ($this->Escenario->delete($escenario)) {
            $this->Flash->success(__('The escenario has been deleted.'));
        } else {
            $this->Flash->error(__('The escenario could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }


    public function filtro(){
        if($this->request->is('ajax')) {
        $idBuscar=$this->request->data['seleccion_'];
        $deportes_por_dedicacion=$this->loadModel('deportes_por_dedicacion');
        $result = $deportes_por_dedicacion->find()->
        select(['x.iddeporte','x.nombre'])->autofields(false)->
        where(['deportes_por_dedicacion.dedicacion_iddedicacion' => $idBuscar])->
        innerjoin(
        ['x' => 'deporte_actividad'],
        ['x.iddeporte = deportes_por_dedicacion.deporte_iddeporte'])->toArray();
        //var_export($result);
                    $this->RequestHandler->respondAs('json');
                    $this->autoRender = false;
                    echo json_encode ($result);
        }
    }

    /*
    *la funcion validador_campos retorna el mensaje con el error de determinado campo
    *las traducciones se hicieron en vendor/cakephp/cakephp/src/Validation.php
    **/
    function validador_campos($errores){
      $campos=array("nombre","capacidad","estado_escala","estado_comentario","municipio","direccion","capacidad_publico","capacidad_deportistas",);
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

}
