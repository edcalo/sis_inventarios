<?php

App::uses('AppController', 'Controller');

/**
 * Roles Controller
 *
 * @property Rol $Rol
 */
class RolesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Rol->recursive = 0;
        $this->set('roles', $this->paginate());
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = 'ajax';
        $this->Rol->recursive = 0;
        $this->set('roles', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Rol->id = $id;
        if (!$this->Rol->exists()) {
            throw new NotFoundException(__('Invalid rol'));
        }
        $this->set('rol', $this->Rol->read(null, $id));
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
            $this->data = array('Rol' => (array) $datos);
            $this->Rol->create();
            if ($this->Rol->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Rol->id);
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
            $this->data = array('Rol' => (array) $datos);
            $this->Rol->id = $this->data['Rol']['id'];
            if ($this->Rol->save($this->data)) {
                $success = true;
                $this->set('roles', $this->Rol->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Rol' => array());
            foreach ($roles as $rol_data) {
                $rol = array('Rol' => (array) $rol_data);
                $this->Rol->id = $rol['Rol']['id'];
                if ($this->Rol->save($rol)) {
                    $success = true;
                    array_push($resp['Rol'], $rol['Rol']);
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
            $this->Rol->id = $roles->id;
            if (!$this->Rol->exists()) {
                throw new NotFoundException(__('Invalid rol'));
            }
            $result = $this->Rol->delete();
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($roles as $rol) {
                $this->Rol->id = $rol->id;
                if (!$this->Rol->exists()) {
                    throw new NotFoundException(__('Invalid rol'));
                }
                $result = ($result and $this->Rol->delete());
            }
            $this->set('eliminado', $result);
        }
    }

}
