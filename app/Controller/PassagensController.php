<?php
<<<<<<< HEAD
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
=======
    class PassagensController extends AppController{
    	public $helpers = array('Html' ,'Form' );
    	public $name = 'Passagens';
    	public $components = array('Session');
        //public $uses = array('Passagem');

        private function getRotas(){
            $rotas = $this->Passagem->Rota->find('list', array('fields' => array('id','trajeto')));

            $this->set(compact('rotas'));
        }
       
    	function index(){
    		 $this->set('passagem', $this->Passagem->find('all'));
>>>>>>> 2c7def939a05d34867faa7a2f84ca7a2230464dc
    	}

    	public function view($id = null) {
            $this->passagem->id = $id;
            $this->set('passagem', $this->Passagem->read());
        }

        public function add(){
        	
        	if($this->request->is('post')){
        	   
        		if($this->Passagem->save($this->request->data)){
        			$this->Session->setFlash('passagem salvo com sucesso!');
        			$this->redirect(array('action'=>'index'));
        		}
        	}

            self::getRotas();
        }

        function edit($id = null){
            $this->Passagem->id = $id;
            if($this->request->is('get')) {
                $this->request->data = $this->Passagem->read();
            } else {
                if($this->Passagem->save($this->request->data)) {
                    $this->Session->setFlash('A passagem foi atualizada com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            }

            self::getRotas();
        }

        function delete($id){
            if(!$this->request->is('post')){
                throw new MethodNotAllowedException();
            }
            if ($this->Passagem->delete($id)) {
                $this->Session->setFlash('Passagem deletada com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
?>