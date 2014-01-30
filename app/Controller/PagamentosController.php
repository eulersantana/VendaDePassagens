<?php
	class PagamentosController extends AppController {
		public $helpers = array('Html','Form');
		public $name = 'Pagamentos';
		public $components = array('Session');



		function index(){
			$this->set('pagamentos', $this->Pagamento->find('all'));
		}

		function add(){
			if($this->request->is('post')){
        		if($this->Pagamento->save($this->request->data)){
        			$this->Session->setFlash('Pagamento salvo com sucesso!');
        			$this->redirect(array('action'=>'index'));
        		}
        	}
		}
	}
?>