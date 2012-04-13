<?php

App::uses('AppController', 'Controller');

/**
 * Almacenes Controller
 *
 * @property Almacen $Almacen
 */
class AlmacenesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Almacen->recursive = 0;
        $this->set('almacenes', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Almacen->id = $id;
        if (!$this->Almacen->exists()) {
            throw new NotFoundException(__('Invalid almacen'));
        }
        $this->set('almacen', $this->Almacen->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Almacen->create();
            if ($this->Almacen->save($this->request->data)) {
                $this->Session->setFlash(__('The almacen has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The almacen could not be saved. Please, try again.'));
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
        $this->Almacen->id = $id;
        if (!$this->Almacen->exists()) {
            throw new NotFoundException(__('Invalid almacen'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Almacen->save($this->request->data)) {
                $this->Session->setFlash(__('The almacen has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The almacen could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Almacen->read(null, $id);
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
        $this->Almacen->id = $id;
        if (!$this->Almacen->exists()) {
            throw new NotFoundException(__('Invalid almacen'));
        }
        if ($this->Almacen->delete()) {
            $this->Session->setFlash(__('Almacen deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Almacen was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = 'ajax';
        $this->Almacen->recursive = 0;
        $this->set('almacenes', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Almacen->id = $id;
        if (!$this->Almacen->exists()) {
            throw new NotFoundException(__('Invalid almacen'));
        }
        $this->set('almacen', $this->Almacen->read(null, $id));
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
            $this->data = array('Almacen' => (array) $datos);

            if ($this->Almacen->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Almacen->id);
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
            $this->data = array('Almacen' => (array) $datos);
            $this->Industria->id=  $this->data['Industria']['id'];
            if ($this->Almacen->save($this->data)) {
                $success = true;
                $this->set('almacenes',  $this->Industria->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Almacen' => array());
            foreach ($datos as $dato_marca) {
                $marca = array('Almacen' => (array) $dato_marca);
                $marca->Industria->id=$marca['Almacen']['id'];
                if ($this->Almacen->save($marca)) {
                    $success = true;
                    array_push($resp['Almacen'], $marca['Almacen']);
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
            $result = $this->Almacen->delete($grupo->id);
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($grupo as $g) {
                $result = ($result and $this->Almacen->delete($g->id));
            }
            $this->set('eliminado', $result);
        }
    }

}
