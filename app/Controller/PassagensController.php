<?php
class PassagensController extends AppController{
	public $helpers = array('Html' ,'Form' );
	public $name = 'Passagens';
	public $components = array('Session');
    public $uses = array('Passagem');

    private function getRotas(){
        $rotas = $this->Passagens->Rotas->find('list', array('fields' => array('id','trajeto')));
        $this->set(compact('rotas'));
    }
   
	function index(){
		 $this->set('passagem', $this->paginate());
	}

	public function view($id = null) {
        $this->passagem->id = $id;
        $this->set('passagem', $this->Passagem->read());
    }

    public function add(){
    	
    	if($this->request->is('post')){
    	   $this->getRotas();
    		if($this->passagem->save($this->request->data)){
    			$this->Session->setFlash('passagem salvo com sucesso!');
    			$this->redirect(array('action'=>'index'));
    		}
    	}
    }




}
?>