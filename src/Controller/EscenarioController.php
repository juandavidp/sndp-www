<?php
namespace App\Controller;

use App\Controller\UsuarioController;

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
        $this->set('escenario', $this->paginate($this->Escenario));
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
        $this->set('escenario', $escenario);
        $this->set('_serialize', ['escenario']);


        //obtengo los nombres y id de los usuarios
        $usuario=$this->loadModel('usuario');
        // Once we have a result set we can get all the rows
        $data = $usuario->find('all')->toArray();

        $this->set('usuario',$data);
        $this->set('_serialize', ['usuario']);
        //$this->set('_serialize', ['entidad']);

        //obtengo los nombres y id de las entidades
        $entidad=$this->loadModel('entidad');
        // Once we have a result set we can get all the rows
        $datas = $entidad->find('all')->toArray();

        $this->set('entidad',$datas);
        $this->set('_serialize', ['entidad']);

        //obtengo los nombres y id de los diferentes deportes
        $deporte=$this->loadModel('deporte');
        // Once we have a result set we can get all the rows
        $dataDeporte = $deporte->find('all')->toArray();

        $this->set('deporte',$dataDeporte);
        $this->set('_serialize', ['deporte']);

        //obtengo los nombres y id de kas dedicaciones
        $dedicacion=$this->loadModel('dedicacion');
        // Once we have a result set we can get all the rows
        $dataDedicacion = $dedicacion->find('all')->toArray();

        $this->set('dedicacion',$dataDedicacion);
        $this->set('_serialize', ['dedicacion']);
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
            $escenario->entidad_idEntidad=$_SESSION['idEntidad'];

            if ($this->Escenario->save($escenario)) {
                $this->Flash->success(__('El escenario fue guardado exitosamente.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El escenario no pudo ser guardado, intentelo de nuevo.'));
            }
        }


// cargar actividades o deporte especificio en combobox
        $this->set(compact('escenario'));
        $this->set('_serialize', ['escenario']);



        //obtengo los nombres y id de las entidades
        $entidad=$this->loadModel('entidad');
        $datas = $entidad->find('all')->toArray();
        $this->set('entidad',$datas);
        $this->set('_serialize', ['entidad']);


        //obtengo los nombres y id de los diferentes deportes
        $deporte_actividad=$this->loadModel('deporte_actividad');
        $dataDeporte = $deporte_actividad->find('all')->toArray();
        $this->set('deporte_actividad',$dataDeporte);
        $this->set('_serialize', ['deporte_actividad']);

        //obtengo los nombres y id de kas dedicaciones
        $dedicacion=$this->loadModel('dedicacion');
        $dataDedicacion = $dedicacion->find('all')->toArray();
        $this->set('dedicacion',$dataDedicacion);
        $this->set('_serialize', ['dedicacion']);

    }


    public function filtroActividaDeporte()
    {


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
        $escenario = $this->Escenario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $escenario = $this->Escenario->patchEntity($escenario, $this->request->data);
            if ($this->Escenario->save($escenario)) {
                $this->Flash->success(__('The escenario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The escenario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('escenario'));
        $this->set('_serialize', ['escenario']);


        //obtengo los nombres y id de los usuarios
        $usuario=$this->loadModel('usuario');
        // Once we have a result set we can get all the rows
        $data = $usuario->find('all')->toArray();

        $this->set('usuario',$data);
        $this->set('_serialize', ['usuario']);
        //$this->set('_serialize', ['entidad']);

        //obtengo los nombres y id de las entidades
        $entidad=$this->loadModel('entidad');
        // Once we have a result set we can get all the rows
        $datas = $entidad->find('all')->toArray();

        $this->set('entidad',$datas);
        //$this->set('_serialize', ['entidad']);

        //obtengo los nombres y id de los diferentes deportes
        $deporte=$this->loadModel('deporte');
        // Once we have a result set we can get all the rows
        $dataDeporte = $deporte->find('all')->toArray();

        $this->set('deporte',$dataDeporte);
        $this->set('_serialize', ['deporte']);

        //obtengo los nombres y id de kas dedicaciones
        $dedica=$this->loadModel('dedicacion');
        // Once we have a result set we can get all the rows
        $dataDedicacion = $dedica->find('all')->toArray();

        $this->set('dedicacion',$dataDedicacion);
        $this->set('_serialize', ['dedicacion']);



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



        //obtengo los nombres y id de los usuarios
        $usuario=$this->loadModel('usuario');
        // Once we have a result set we can get all the rows
        $data = $usuario->find('all')->toArray();

        $this->set('usuario',$data);
        $this->set('_serialize', ['usuario']);
        //$this->set('_serialize', ['entidad']);

        //obtengo los nombres y id de las entidades
        $entidad=$this->loadModel('entidad');
        // Once we have a result set we can get all the rows
        $datas = $entidad->find('all')->toArray();

        $this->set('entidad',$datas);
        $this->set('_serialize', ['entidad']);

        //obtengo los nombres y id de los diferentes deportes
        $deporte=$this->loadModel('deporte_actividad');
        // Once we have a result set we can get all the rows
        $dataDeporte = $deporte->find('all')->toArray();

        $this->set('deporte',$dataDeporte);
        $this->set('_serialize', ['deporte']);

        //obtengo los nombres y id de kas dedicaciones
        $dedica=$this->loadModel('dedicacion');
        // Once we have a result set we can get all the rows
        $dataDedicacion = $dedica->find('all')->toArray();

        $this->set('dedicacion',$dataDedicacion);
        $this->set('_serialize', ['dedicacion']);
    }
<<<<<<< HEAD



public function prueba(){
            if($this->request->is('ajax')) {
            $idBuscar=$this->request->data['seleccion_'];

    $deportes_por_dedicacion=$this->loadModel('deportes_por_dedicacion');
    $result = $deportes_por_dedicacion->find()->select(['x.iddeporte','x.nombre'])->autofields(false)
    ->where(['deportes_por_dedicacion.dedicacion_iddedicacion' => $idBuscar])->innerJoin(
    ['x' => 'deporte_actividad'],
    ['x.iddeporte = deportes_por_dedicacion.deporte_iddeporte'])->toArray();
                echo json_encode ($result);

            }
    }


    public $usuarios = array('Html', 'Form');

     public function find() {

            $usuarios = $this->$usuario->find('list', array(
                  'fields' => array('Usuario.idusuario', 'Usuario.nombre')
            ));
            $this->set('usuarios', $usuarios);
        }







}
