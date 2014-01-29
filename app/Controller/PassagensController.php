<?php
class PassagensController extends AppController{
	public $helpers = array('Html' ,'Form' );
	public $name = 'Passagens';
	public $components = array('Session');


   
	function index(){
		 $this->set('passagem', $this->paginate());
	}

	public function view($id = null) {
        $this->passagem->id = $id;
        $this->set('passagem', $this->Passagem->read());
    }

    public function add(){
    	
    	if($this->request->is('post')){
    	   
    		if($this->passagem->save($this->request->data)){
    			$this->Session->setFlash('passagem salvo com sucesso!');
    			$this->redirect(array('action'=>'index'));
    		}
    	}
    }




}
?>