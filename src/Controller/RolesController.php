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
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Rol->id = $id;
        if (!$this->Rol->exists()) {
            throw new NotFoundException(__('Invalid rol'));
        }
        $this->set('rol', $this->Rol->read(null, $id));
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
            $datos = json_decode(stripslashes($this->data)); //decodificamos la informacion
            $this->data = array('Rol' => (array) $datos);
            if ($this->FtpGroup->save($this->data)) {
                $this->set('guardado', 1);

                $this->data['Rol']['id'] = $this->Rol->id;
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
        $datos = json_decode(stripslashes($this->data)); //decodificamos la informacion
        $success = false;
        if (count($datos) == 1) { //verificamos si solo se modifico un registro o varios
            $this->data = array('Rol' => (array) $datos);
            $this->data['Rol']['id'] = $this->data['Rol']['id'];
            if ($this->Rol->save($this->data)) {
                $success = true;
                $this->set('roles', $this->Rol->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Rol' => array());
            foreach ($roles as $rol_data) {
                $rol = array('Rol' => (array) $rol_data);
                $rol['Rol']['id'] = $rol['Rol']['id'];
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
        $grupo = json_decode(stripslashes($this->data));
        if (count($grupo) == 1) {
            $result = $this->Rol->delete($grupo->id);
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($grupo as $g) {
                $result = ($result and $this->Rol->delete($g->id));
            }
            $this->set('eliminado', $result);
        }
    }

}
