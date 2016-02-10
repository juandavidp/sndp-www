<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Noticia Controller
 *
 * @property \App\Model\Table\NoticiaTable $Noticia
 */
class NoticiaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('noticia', $this->paginate($this->Noticia));
        $this->set('_serialize', ['noticia']);
    }

    /**
     * View method
     *
     * @param string|null $id Noticium id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $noticium = $this->Noticia->get($id, [
            'contain' => []
        ]);
        $this->set('noticium', $noticium);
        $this->set('_serialize', ['noticium']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $noticium = $this->Noticia->newEntity();
        if ($this->request->is('post')) {
<<<<<<< HEAD
<<<<<<<< HEAD
=======

>>>>>>> bfc9447cc2496466618c2dc0bf8b3c39ee94778e
          $nombre_archivo=$_FILES['foto']['name'];
          
          if (move_uploaded_file($_FILES['foto']['tmp_name'], "/var/www/html/sndp/webroot/img/fotos_noticias/".$nombre_archivo)){
            $this->request->data['foto']=$nombre_archivo;

<<<<<<< HEAD
=======
          $nombre_archivo=md5($_FILES['foto']['name']);
          if (move_uploaded_file($_FILES['foto']['tmp_name'], "/var/www/html/sndp/webroot/img/fotos_noticias/".$nombre_archivo)){
             //echo "El archivo ha sido cargado correctamente.";
          }else{
             echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
          }
>>>>>>>> 6ab817c4752524f29b595223723d8736f3b69659
=======
>>>>>>> bfc9447cc2496466618c2dc0bf8b3c39ee94778e
            $noticium = $this->Noticia->patchEntity($noticium, $this->request->data);
            $noticium->entidad_idEntidad=$_SESSION['idEntidad'];

            if ($this->Noticia->save($noticium)) {
                $this->Flash->success(__('The noticium has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The noticium could not be saved. Please, try again.'));
            }
          }else{
            $this->Flash->error(__("Ocurrió algún error al subir el fichero. No pudo guardarse."));

          }

        }
        
        $this->set(compact('noticium'));
        $this->set('_serialize', ['noticium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Noticium id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $noticium = $this->Noticia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $noticium = $this->Noticia->patchEntity($noticium, $this->request->data);
            if ($this->Noticia->save($noticium)) {
                $this->Flash->success(__('The noticium has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The noticium could not be saved. Please, try again.'));
            }
        }

        //obtengo los nombres y id de las entidades
        $entidad=$this->loadModel('entidad');
        // Once we have a result set we can get all the rows
        $datas = $entidad->find('all')->toArray();

        $this->set('entidad',$datas);

        $this->set(compact('noticium'));
        $this->set('_serialize', ['noticium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Noticium id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $noticium = $this->Noticia->get($id);
        if ($this->Noticia->delete($noticium)) {
            $this->Flash->success(__('The noticium has been deleted.'));
        } else {
            $this->Flash->error(__('The noticium could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
