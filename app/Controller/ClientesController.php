<?php 
	class ClientesController extends AppController{
		public $name = 'Clientes';

		public function view_action() {
	        // códigos
	        $this->layout = 'layoutPrincipal';
	    }

	    public function add(){
    		
	        if($this->request->is('post')){
	        	$this->request->data['Cliente']['tipo'] = 'cliente';
	            if($this->Cliente->save($this->request->data,false)){
	                $this->Session->setFlash('Usuario salvo com sucesso!');
	                $this->redirect(Router::url('/', true));
	            }
	           
	        }
	         self::view_action();
	    }
	}
 ?>