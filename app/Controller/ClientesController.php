<?php 
	class ClientesController extends AppController{
		public $name = 'Clientes';

		public function beforeFilter() {
		    parent::beforeFilter();
		    $this->Auth->allow('add');

		}

		public function view_action() {
	        // códigos
	        $this->layout = 'layoutPrincipal';
	    }

	    public function add(){
    		
	        if($this->request->is('post')){
	        	$this->request->data['Cliente']['tipo'] = 'Cliente';
	        	$this->request->data['Cliente']['pontos'] = 0;
	        	$this->request->data['Cliente']['created'] = date('y-m-d H:i:s');
	        	
	            if($this->Cliente->save($this->request->data,false)){
	                $this->Session->setFlash('Usuario salvo com sucesso!');
	                $this->redirect(Router::url('/', true));
	            }
	           
	        }
	         self::view_action();
	    }

	    public function edit($id = null) {
	        $this->Cliente->id = $id;
	        if (!$this->Cliente->exists()) {
	            throw new NotFoundException(__('Usuario invalido.'));
	        }
	        if ($this->request->is('post') || $this->request->is('put')) {
	            if ($this->Cliente->save($this->request->data)) {
	                $this->Session->setFlash(__('Usuario salvo com sucesso'));
	                $this->redirect(Router::url('/',true));
	            } else {
	                $this->Session->setFlash(__('Não foi possivel salva, tente novamente.'));
	            }
	        } else {
	            $this->request->data = $this->Cliente->read(null, $id);
	            unset($this->request->data['Cliente']['password']);
	        }
	         self::view_action();
	    }
	}
 ?>
