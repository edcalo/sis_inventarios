<?php

App::uses('AppController', 'Controller');

/**
 * Clientes Controller
 *
 * @property Cliente $Cliente
 */
class ClientesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Cliente->recursive = 0;
        $this->set('clientes', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Cliente->id = $id;
        if (!$this->Cliente->exists()) {
            throw new NotFoundException(__('Invalid cliente'));
        }
        $this->set('cliente', $this->Cliente->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Cliente->create();
            if ($this->Cliente->save($this->request->data)) {
                $this->Session->setFlash(__('The cliente has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Cliente->id = $id;
        if (!$this->Cliente->exists()) {
            throw new NotFoundException(__('Invalid cliente'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Cliente->save($this->request->data)) {
                $this->Session->setFlash(__('The cliente has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The cliente could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Cliente->read(null, $id);
        }
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->Cliente->id = $id;
        if (!$this->Cliente->exists()) {
            throw new NotFoundException(__('Invalid cliente'));
        }
        if ($this->Cliente->delete()) {
            $this->Session->setFlash(__('Cliente deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Cliente was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = 'ajax';
        $this->Cliente->recursive = 0;
        $this->set('clientes', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Cliente->id = $id;
        if (!$this->Cliente->exists()) {
            throw new NotFoundException(__('Invalid cliente'));
        }
        $this->set('cliente', $this->Cliente->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        $this->layout = 'ajax';
        if (!empty($this->data)) {

            $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data)); //decodificamos la informacion
            $this->data = array('Cliente' => (array) $datos);

            if ($this->Cliente->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Cliente->id);
            } else {
                $this->set('guardado', 0);
            }
        } else {
            $this->set('guardado', 2); // mo se recibieron datos para guardar
        }
    }

    /**
     * admin_edit method
     *
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->layout = 'ajax';
        $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data)); //decodificamos la informacion
        $success = false;
        if (count($datos) == 1) { //verificamos si solo se modifico un registro o varios
            $this->data = array('Cliente' => (array) $datos);
            $this->Cliente->id =  $this->data['Cliente']['id'];
            if ($this->Cliente->save($this->data)) {
                $success = true;
                $this->set('clientes',  $this->Cliente->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Cliente' => array());
            foreach ($datos as $dato_marca) {
                $marca = array('Cliente' => (array) $dato_marca);
                $marca->Cliente->id=$marca['Cliente']['id'];
                if ($this->Cliente->save($marca)) {
                    $success = true;
                    array_push($resp['Cliente'], $marca['Cliente']);
                }
            }
            $this->data=$resp;            
        }
        $this->set('actualizado', $success);
    }

    /**
     * admin_delete method
     *
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->layout = 'ajax';
        $grupo = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data));
        if (count($grupo) == 1) {
            $result = $this->Cliente->delete($grupo->id);
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($grupo as $g) {
                $result = ($result and $this->Cliente->delete($g->id));
            }
            $this->set('eliminado', $result);
        }
    }

}
