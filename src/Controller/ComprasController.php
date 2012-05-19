<?php

App::uses('AppController', 'Controller');

/**
 * Compras Controller
 *
 * @property Compra $Compra
 */
class ComprasController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Compra->recursive = 0;
        $this->set('compras', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Compra->id = $id;
        if (!$this->Compra->exists()) {
            throw new NotFoundException(__('Invalid compra'));
        }
        $this->set('compra', $this->Compra->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Compra->create();
            if ($this->Compra->save($this->request->data)) {
                $this->Session->setFlash(__('The compra has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The compra could not be saved. Please, try again.'));
            }
        }
        $creditos = $this->Compra->Credito->find('list');
        $empleados = $this->Compra->Empleado->find('list');
        $proveedores = $this->Compra->Proveedor->find('list');
        $this->set(compact('creditos', 'empleados', 'proveedores'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Compra->id = $id;
        if (!$this->Compra->exists()) {
            throw new NotFoundException(__('Invalid compra'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Compra->save($this->request->data)) {
                $this->Session->setFlash(__('The compra has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The compra could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Compra->read(null, $id);
        }
        $creditos = $this->Compra->Credito->find('list');
        $empleados = $this->Compra->Empleado->find('list');
        $proveedores = $this->Compra->Proveedor->find('list');
        $this->set(compact('creditos', 'empleados', 'proveedores'));
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
        $this->Compra->id = $id;
        if (!$this->Compra->exists()) {
            throw new NotFoundException(__('Invalid compra'));
        }
        if ($this->Compra->delete()) {
            $this->Session->setFlash(__('Compra deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Compra was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = 'ajax';
        $this->Compra->recursive = 0;
        $this->set('compras', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->layout = 'ajax';
        $this->Compra->id = $id;
        if (!$this->Compra->exists()) {
            throw new NotFoundException(__('Invalid compra'));
        }
        $this->set('compra', $this->Compra->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        $this->layout = 'ajax';
        //print_r($this->data);
        if (!empty($this->data)) {
            $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data)); //decodificamos la informacion
            $this->data = array('Compra' => (array) $datos);
            if ($this->Compra->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Compra->id);
            } else {
                $this->set('guardado', 0);
            }
        }else {
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
            $this->data = array('Compra' => (array) $datos);
            $this->Compra->id=  $this->data['Compra']['id'];
            if ($this->Compra->save($this->data)) {
                $success = true;
                $this->set('compras',  $this->Compra->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Compra' => array());
            foreach ($datos as $dato_marca) {
                $marca = array('Compra' => (array) $dato_marca);
                $marca->Compra->id=$marca['Compra']['id'];
                if ($this->Compra->save($marca)) {
                    $success = true;
                    array_push($resp['Compra'], $marca['Compra']);
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
        $roles = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data));

        if (count($roles) == 1) {
            $result = TRUE;
            $this->Compra->id = $roles->id;
            if (!$this->Compra->exists()) {
                $result = FALSE;
            } else {
                $result = $this->Compra->delete();
            }
            $this->set('eliminado', $result);
        } else {
            $result = TRUE;
            foreach ($roles as $rol) {
                $this->Compra->id = $rol->id;
                if (!$this->Compra->exists()) {
                    $result = ($result and FALSE);
                }
                $result = ($result and $this->Compra->delete());
            }
            $this->set('eliminado', $result);
        }
    }

}
