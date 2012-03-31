<?php

App::uses('AppController', 'Controller');

/**
 * Industrias Controller
 *
 * @property Industria $Industria
 */
class IndustriasController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->layout = 'ajax';
        $this->Industria->recursive = 0;
        $this->set('industrias', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Industria->id = $id;
        if (!$this->Industria->exists()) {
            throw new NotFoundException(__('Invalid industria'));
        }
        $this->set('industria', $this->Industria->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        $this->layout = 'ajax';
        if (!empty($this->data)) {

            $datos = json_decode(stripslashes($this->data[0])); //decodificamos la informacion
            $this->data = array('Industria' => (array)$datos);

            if ($this->Industria->save($this->data)) {
                $this->set('guardado', 1);                
                $this->set('newID', $this->Industria->id);
            } else {
                $this->set('guardado', 0);
            }
        } else {
            $this->set('guardado', 2); // mo se recibieron datos para guardar
        }
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Industria->id = $id;
        if (!$this->Industria->exists()) {
            throw new NotFoundException(__('Invalid industria'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Industria->save($this->request->data)) {
                $this->Session->setFlash(__('The industria has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The industria could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Industria->read(null, $id);
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
        $this->Industria->id = $id;
        if (!$this->Industria->exists()) {
            throw new NotFoundException(__('Invalid industria'));
        }
        if ($this->Industria->delete()) {
            $this->Session->setFlash(__('Industria deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Industria was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = 'ajax';
        $this->Industria->recursive = 0;
        $this->set('industrias', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Industria->id = $id;
        if (!$this->Industria->exists()) {
            throw new NotFoundException(__('Invalid industria'));
        }
        $this->set('industria', $this->Industria->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        $this->layout = 'ajax';
        if (!empty($this->data)) {

            $datos = json_decode(stripslashes($this->data[0])); //decodificamos la informacion
            $this->data = array('Industria' => (array)$datos);

            if ($this->Industria->save($this->data)) {
                $this->set('guardado', 1);                
                $this->set('newID', $this->Industria->id);
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
        $datos = json_decode(stripslashes($this->data[0])); //decodificamos la informacion
        $success = false;
        if (count($datos) == 1) { //verificamos si solo se modifico un registro o varios
            $this->data = array('Industria' => (array) $datos);
            //$this->data['Industria']['id']=  $this->data['Industria']['id'];
            if ($this->Industria->save($this->data)) {
                $success = true;
                //$this->set('industrias',  $this->Industria->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Industria' => array());
            foreach ($datos as $dato_marca) {
                $marca = array('Industria' => (array) $dato_marca);
                $marca['Industria']['id']=$marca['Industria']['id'];
                if ($this->Industria->save($marca)) {
                    $success = true;
                    array_push($resp['Industria'], $marca['Industria']);
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
        $grupo = json_decode(stripslashes($this->data[0]));
        if (count($grupo) == 1) {
            $result = $this->Industria->delete($grupo->id);
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($grupo as $g) {
                $result = ($result and $this->Industria->delete($g->id));
            }
            $this->set('eliminado', $result);
        }
    }

}
