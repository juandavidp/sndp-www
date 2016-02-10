<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Usuario Controller
 *
 * @property \App\Model\Table\UsuarioTable $Usuario
 */
class UsuarioController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('usuario', $this->paginate($this->Usuario));
        $this->set('_serialize', ['usuario']);
    }


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {

              //cargamos la entidad que le pertenece a el usuario
              $entidad=$this->loadModel('entidad');

              //paso la consulta a un array
              $result=$entidad->find()->where(['usuario_idusuario' => $user['idusuario']])->toArray();


              if ($result!=null || $user['idusuario']==1) {

                    //metemos el usuario a la sesion
                    $this->Auth->setUser($user);
                    //guardamos el id de la entidad perteneciente a el usuario en una sesion
                    @$_SESSION['idEntidad']=$result[0]->idEntidad;
                    @$_SESSION['entidad']=$result[0]->nombre;
                    return $this->redirect($this->Auth->redirectUrl());
                }
                else{
                    return $this->Flash->error(__('El usuario no tiene asignadas entidades contacte con el admin'));
                    die;
                }



            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuario = $this->Usuario->get($id, [
            'contain' => []
        ]);
        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuario = $this->Usuario->newEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->data);
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->data);
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('usuario'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuario->get($id);
        if ($this->Usuario->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
