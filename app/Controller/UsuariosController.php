<?php
class UsuariosController extends AppController{
	public $helpers = array('Html' ,'Form' );
	public $name = 'Usuarios';
	public $components = array('Session');


	function index(){
		$this->set('usuario', $this->Usuario->find('all'));
	}

	public function view($id = null) {
        $this->Usuario->id = $id;
        $this->set('usuario', $this->Usuario->read());
    }

    public function add(){
    	
    	if($this->request->is('post')){
    	
    		if($this->Usuario->save($this->request->data)){
    			$this->Session->setFlash('Usuario salvo com sucesso!');
    			$this->redirect(array('action'=>'index'));
    		}
    	}
    }
}
?>