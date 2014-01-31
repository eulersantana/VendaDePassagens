<?php
	class PagamentosController extends AppController {
		public $helpers = array('Html','Form');
		public $name = 'Pagamentos';
		public $components = array('Session');

		private function getPassagens(){
			$passagens = $this->Pagamento->Passagem->Rota->find('list', array('fields' => array('id','trajeto')));
			$this->set(compact('passagens'));
		}

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
        	self::getPassagens();
		}
	}
?>