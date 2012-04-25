<?php

App::uses('AppController', 'Controller');

/**
 * Items Controller
 *
 * @property Item $Item
 */
class ItemsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Item->recursive = 0;
        $this->set('items', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Item->id = $id;
        if (!$this->Item->exists()) {
            throw new NotFoundException(__('Invalid item'));
        }
        $this->set('item', $this->Item->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Item->create();
            if ($this->Item->save($this->request->data)) {
                $this->Session->setFlash(__('The item has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The item could not be saved. Please, try again.'));
            }
        }
        $marcas = $this->Item->Marca->find('list');
        $grupos = $this->Item->Grupo->find('list');
        $industrias = $this->Item->Industria->find('list');
        $almacenes = $this->Item->Almacen->find('list');
        $compras = $this->Item->Compra->find('list');
        $facturas = $this->Item->Factura->find('list');
        $this->set(compact('marcas', 'grupos', 'industrias', 'almacenes', 'compras', 'facturas'));
    }

    /**
     * edit method
     *
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Item->id = $id;
        if (!$this->Item->exists()) {
            throw new NotFoundException(__('Invalid item'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Item->save($this->request->data)) {
                $this->Session->setFlash(__('The item has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The item could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Item->read(null, $id);
        }
        $marcas = $this->Item->Marca->find('list');
        $grupos = $this->Item->Grupo->find('list');
        $industrias = $this->Item->Industria->find('list');
        $almacenes = $this->Item->Almacen->find('list');
        $compras = $this->Item->Compra->find('list');
        $facturas = $this->Item->Factura->find('list');
        $this->set(compact('marcas', 'grupos', 'industrias', 'almacenes', 'compras', 'facturas'));
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
        $this->Item->id = $id;
        if (!$this->Item->exists()) {
            throw new NotFoundException(__('Invalid item'));
        }
        if ($this->Item->delete()) {
            $this->Session->setFlash(__('Item deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Item was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = 'ajax';
        $this->Item->recursive = 0;
        $this->set('items', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Item->id = $id;
        if (!$this->Item->exists()) {
            throw new NotFoundException(__('Invalid item'));
        }
        $this->set('item', $this->Item->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        $this->layout = 'ajax';
        if (!empty($this->data)) {
            $datos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data));
            $this->data = array('Item' => (array) $datos);
            if ($this->Item->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Item->id);
            } else {
                $this->set('guardado', 0);
            }
        } else {
            $this->set('guardado', 2);
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
            $this->data = array('Item' => (array) $datos);
            $this->Item->id = $this->data['Item']['id'];
            if ($this->Item->save($this->data)) {
                $success = true;
                $this->set('items', $this->Item->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Item' => array());
            foreach ($datos as $dato_marca) {
                $marca = array('Item' => (array) $dato_marca);
                $marca->Item->id = $marca['Item']['id'];
                if ($this->Item->save($marca)) {
                    $success = true;
                    array_push($resp['Item'], $marca['Item']);
                }
            }
            $this->data = $resp;
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
            $this->Item->id = $roles->id;
            if (!$this->Item->exists()) {
                $result = FALSE;
            } else {
                $result = $this->Item->delete();
            }
            $this->set('eliminado', $result);
        } else {
            $result = TRUE;
            foreach ($roles as $rol) {
                $this->Item->id = $rol->id;
                if (!$this->Item->exists()) {
                    $result = ($result and FALSE);
                }
                $result = ($result and $this->Item->delete());
            }
            $this->set('eliminado', $result);
        }
    }
}
