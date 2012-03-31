<?php

App::uses('AppController', 'Controller');

/**
 * Marcas Controller
 *
 * @property Marca $Marca
 */
class MarcasController extends AppController {

    var $name = 'Marcas';

    /**
     * index method
     *
     * @return void
     */
    /* var $paginate = array(
      'limit' => 10,
      'order' => array(
      'Marca.id' => 'asc'
      )
      ); */

    public function index() {
        $this->layout = 'ajax';
        
        $marcas = array();
        foreach ($this->Marca->find('all') as $marca) {
            array_push($marcas, $marca['Marca']);
        }
        //$this->Marca->recursive = 0;
        //$this->set('marcas', $this->paginate());
        $this->set('datos', $marcas);
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Marca->id = $id;
        if (!$this->Marca->exists()) {
            throw new NotFoundException(__('Invalid marca'));
        }
        $this->set('marca', $this->Marca->read(null, $id));
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
            $this->data = array('Marca' => (array)$datos);

            if ($this->Marca->save($this->data)) {
                $this->set('guardado', 1);                
                $this->set('newID', $this->Marca->id);
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
    public function edit() {
        $this->layout = 'ajax';
        $datos = json_decode(stripslashes($this->data)); //decodificamos la informacion
        $success = false;
        if (count($datos) == 1) { //verificamos si solo se modifico un registro o varios
            $this->data = array('Marca' => (array) $datos);
            if ($this->Marca->save($this->data)) {
                $success = true;
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            foreach ($datos as $dato_cargo) {
                $cargo = array('Marca' => (array) $dato_cargo);
                if ($this->Marco->save($cargo)) {
                    $success = true;
                }
            }
            $this->set('actualizado', $success);
        }
    }

    /**
     * delete method
     *
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->layout = 'ajax';
        $marca = (json_decode(stripslashes($this->data)));
        //$result = $this->Cargo->delete($id);
        //$this->set('eliminado', $result);
        if (count($marca) == 1) {
            $result = $this->Marca->delete($marca->id);
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($marca as $g) {
                $result = ($result and $this->Marca->delete($g->id));
            }
            $this->set('eliminado', $result);
        }
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
         $this->layout = 'ajax';
        
        $marcas = array();
        foreach ($this->Marca->find('all') as $marca) {
            array_push($marcas, $marca['Marca']);
        }
        //$this->Marca->recursive = 0;
        //$this->set('marcas', $this->paginate());
        $this->set('datos', $marcas);
    }

    /**
     * admin_view method
     *
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Marca->id = $id;
        if (!$this->Marca->exists()) {
            throw new NotFoundException(__('Invalid marca'));
        }
        $this->set('marca', $this->Marca->read(null, $id));
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
            $this->data = array('Marca' => (array)$datos);

            if ($this->Marca->save($this->data)) {
                $this->set('guardado', 1);                
                $this->set('newID', $this->Marca->id);
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
    public function admin_edit($id =null) {
        $this->layout = 'ajax';
        $datos = json_decode(stripslashes($this->data[0])); //decodificamos la informacion
        $success = false;
        if (count($datos) == 1) { //verificamos si solo se modifico un registro o varios
            $this->data = array('Marca' => (array) $datos);
            //$this->data['Marca']['id']=  $this->data['Marca']['id'];
            if ($this->Marca->save($this->data)) {
                $success = true;
                //$this->set('marcs',  $this->Marca->find('all'));
            }
            $this->set('actualizado', $success);
        } else if (count($datos) >= 2) {
            $resp = array('Marca' => array());
            foreach ($datos as $dato_marca) {
                $marca = array('Marca' => (array) $dato_marca);
                $marca['Marca']['id']=$marca['Marca']['id'];
                if ($this->Marca->save($marca)) {
                    $success = true;
                    array_push($resp['Marca'], $marca['Marca']);
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
            $result = $this->Marca->delete($grupo->id);
            $this->set('eliminado', $result);
        } else {
            $result = true;
            foreach ($grupo as $g) {
                $result = ($result and $this->Marca->delete($g->id));
            }
            $this->set('eliminado', $result);
        }
    }

}
