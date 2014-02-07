<?php 
	/**
	* 
	*/
	class ComprasController extends AppController
	{	public $helpers = array('Html','Form');
		public $components = array('Session');
		public $name = 'Compras';
        var $uses = array('Passagem','Rota');

		
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->deny('index','add');

        }

        function view_action() {
            $this->layout = 'layoutPrincipal';
        }

        function getCompras(){
            $this->set('compras_cliente', $this->Compra->find('all'));
        }

        function getRota($id = null){
            $this->Rota->id = $id;
            if($this->request->is('get')) {
                $this->request->data = $this->Rota->read(); 
            }
            
        }

        function index(){
            //$this->set('compras', $this->Compra->find('all'));
            $this->set('compras', $this->paginate());
            $this->set(self::getRota($this->Session->read('Auth.Compra.passagem_rota_id')),$this->paginate());
            self::view_action();

        }

		function add(){
			if($this->request->is('post')){
        		if($this->Compra->save($this->request->data)){
        			$this->Session->setFlash('Compra salvo com sucesso!');
        			$this->redirect(Router::url('/',true));
        		}
        	}

            self::view_action();
		}

        function edit($id = null){
            $this->Compra->id = $id;
            if($this->request->is('get')) {
                $this->request->data = $this->Compra->read();
            } else {
                if($this->Compra->save($this->request->data)) {
                    $this->Session->setFlash('O Compra foi atualizado com sucesso!');
                    $this->redirect(Router::url('/',true));
                }
            }

            self::getPassagens();
            self::view_action();
        }

        function delete($id){
            if(!$this->request->is('post')){
                throw new MethodNotAllowedException();
            }
            if ($this->Compra->delete($id)) {
                $this->Session->setFlash('Compra deletado com sucesso');
                $this->redirect(Router::url('/',true));
            }
        }

        function view_rota($id){
            $this->Compra->Passagem->Rota->id = $id;
            $this->set('rotas', $this->Compra->Passagem->Rota->read());

            self::view_action();
            self::getCompras();
            self::index();
        }
	}
 ?>