<?php

App::uses('AppController', 'Controller');

/**
 * Proveedores Controller
 *
 * @property Proveedor $Proveedor
 */
class ProveedoresController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Proveedor->recursive = 0;
        $this->set('proveedores', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Proveedor->id = $id;
        if (!$this->Proveedor->exists()) {
            throw new NotFoundException(__('Invalid proveedor'));
        }
        $this->set('proveedor', $this->Proveedor->read(null, $id));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = 'ajax';
        $this->Proveedor->recursive = 0;
        $this->set('proveedores', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Proveedor->id = $id;
        if (!$this->Proveedor->exists()) {
            throw new NotFoundException(__('Invalid proveedor'));
        }
        $this->set('proveedor', $this->Proveedor->read(null, $id));
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
            $this->data = array('Proveedor' => (array) $datos);
            $this->Proveedor->create();
            if ($this->Proveedor->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Proveedor->id);
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
            $this->data = array('Proveedor' => (array) $datos);
            $this->Proveedor->id = $this->data['Proveedor']['id'];
            if ($this->Proveedor->save($this->data)) {
                $success = true;
                $this->set('proveedores', $this->Proveedor->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Proveedor' => array());
            foreach ($proveedores as $proveedor_data) {
                $proveedor = array('Proveedor' => (array) $proveedor_data);
                $this->Proveedor->id = $proveedor['Proveedor']['id'];
                if ($this->Proveedor->save($proveedor)) {
                    $success = true;
                    array_push($resp['Proveedor'], $proveedor['Proveedor']);
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
        $proveedores = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data));

        if (count($proveedores) == 1) {
            $result = TRUE;
            $this->Proveedor->id = $proveedores->id;
            if (!$this->Proveedor->exists()) {
                $result = FALSE;
            } else {
                $result = $this->Proveedor->delete();
            }
            $this->set('eliminado', $result);
        } else {
            $result = TRUE;
            foreach ($proveedores as $proveedor) {
                $this->Proveedor->id = $proveedor->id;
                if (!$this->Proveedor->exists()) {
                    $result = ($result and FALSE);
                    continue;
                }
                $result = ($result and $this->Proveedor->delete());
            }
            $this->set('eliminado', $result);
        }
    }

}
