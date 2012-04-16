<?php

App::uses('AppController', 'Controller');

/**
 * Grupos Controller
 *
 * @property Grupo $Grupo
 */
class GruposController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Grupo->recursive = 0;
        $this->set('grupos', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Grupo->id = $id;
        if (!$this->Grupo->exists()) {
            throw new NotFoundException(__('Invalid grupo'));
        }
        $this->set('grupo', $this->Grupo->read(null, $id));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->layout = 'ajax';
        $this->Grupo->recursive = 0;
        $padre = isset($this->request->query['grupo']) ? $this->request->query['grupo'] : 1;
        $this->set('grupos', $this->Grupo->find(
                        'all', array(
                    'conditions' => array(
                        'Grupo.grupo_id' => $padre
                    )
                        )
                ));
    }

    /**
     * admin_tree method
     *
     * @return void
     */
    public function admin_tree() {
        $this->Grupo->recursive = 0;
        $this->layout = 'ajax';
        $padre = $this->request->query['node'];
        $grupos = $this->Grupo->find(
                        'all', array(
                    'conditions' => array(
                        'Grupo.grupo_id' => $padre
                    )
                        )
        );
        $pos = 0;
        foreach ($grupos as $grupo) {
            $childs = $this->Grupo->find('count', array(
                        'conditions' => array(
                            'Grupo.grupo_id' => $grupo['Grupo']['id']
                        )
                    ));
            $grupos[$pos]['Grupo']['childs'] = $childs;
            $pos++;
        }
        $this->set('grupos', $grupos);
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Grupo->id = $id;
        if (!$this->Grupo->exists()) {
            throw new NotFoundException(__('Invalid grupo'));
        }
        $this->set('grupo', $this->Grupo->read(null, $id));
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
            $this->data = array('Grupo' => (array) $datos);
            $this->Grupo->create();
            if ($this->Grupo->save($this->data)) {
                $this->set('guardado', 1);
                $this->set('newID', $this->Grupo->id);
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
            $this->data = array('Grupo' => (array) $datos);
            $this->Grupo->id = $this->data['Grupo']['id'];
            if ($this->Grupo->save($this->data)) {
                $success = true;
                $this->set('grupos', $this->Grupo->find(
                    'all', array(
                            'conditions' => array(
                                'Grupo.grupo_id' => $this->data['Grupo']['grupo_id']
                            )
                        )
                    ));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Grupo' => array());
            foreach ($datos as $grupo_data) {
                $grupo = array('Grupo' => (array) $grupo_data);
                $this->Grupo->id = $grupo['Grupo']['id'];
                if ($this->Grupo->save($grupo)) {
                    $success = true;
                    array_push($resp['Grupo'], $grupo['Grupo']);
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
        $grupos = json_decode(stripslashes(is_array($this->data) ? $this->data[0] : $this->data));

        if (count($grupos) == 1) {
            $result = TRUE;
            $this->Grupo->id = $grupos->id;
            if (!$this->Grupo->exists()) {
                $result = FALSE;
            } else {
                $result = $this->Grupo->delete();
            }
            $this->set('eliminado', $result);
        } else {
            $result = TRUE;
            foreach ($grupos as $grupo) {
                $this->Grupo->id = $grupo->id;
                if (!$this->Grupo->exists()) {
                    $result = ($result and FALSE);
                }
                $result = ($result and $this->Grupo->delete());
            }
            $this->set('eliminado', $result);
        }
    }

}
