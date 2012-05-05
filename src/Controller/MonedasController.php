<?php

App::uses('AppController', 'Controller');

/**
 * Monedas Controller
 *
 * @property Moneda $Moneda
 */
class MonedasController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Moneda->recursive = 0;
        $this->set('monedas', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Moneda->id = $id;
        if (!$this->Moneda->exists()) {
            throw new NotFoundException(__('Invalid moneda'));
        }
        $this->set('moneda', $this->Moneda->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Moneda->create();
            if ($this->Moneda->save($this->request->data)) {
                $this->Session->setFlash(__('The moneda has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The moneda could not be saved. Please, try again.'));
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
        $this->Moneda->id = $id;
        if (!$this->Moneda->exists()) {
            throw new NotFoundException(__('Invalid moneda'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Moneda->save($this->request->data)) {
                $this->Session->setFlash(__('The moneda has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The moneda could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Moneda->read(null, $id);
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
        $this->Moneda->id = $id;
        if (!$this->Moneda->exists()) {
            throw new NotFoundException(__('Invalid moneda'));
        }
        if ($this->Moneda->delete()) {
            $this->Session->setFlash(__('Moneda deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Moneda was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = 'ajax';
        $this->Moneda->recursive = 0;
        $this->set('monedas', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Moneda->id = $id;
        if (!$this->Moneda->exists()) {
            throw new NotFoundException(__('Invalid moneda'));
        }
        $this->set('moneda', $this->Moneda->read(null, $id));
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
            $this->data = array('Moneda' => (array) $datos);

            if ($this->Moneda->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Moneda->id);
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
            $this->data = array('Moneda' => (array) $datos);
            $this->Moneda->id =  $this->data['Moneda']['id'];
            if ($this->Moneda->save($this->data)) {
                $success = true;
                $this->set('monedas',  $this->Moneda->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Moneda' => array());
            foreach ($datos as $dato_moneda) {
                $moneda = array('Moneda' => (array) $dato_moneda);
                $moneda->Moneda->id=$moneda['Moneda']['id'];
                if ($this->Moneda->save($moneda)) {
                    $success = true;
                    array_push($resp['Moneda'], $moneda['Moneda']);
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
        $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data));
        if (count($datos) == 1) {
            $result = $this->Moneda->delete($datos->id);
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($datos as $g) {
                $result = ($result and $this->Moneda->delete($g->id));
            }
            $this->set('eliminado', $result);
        }
    }

}
