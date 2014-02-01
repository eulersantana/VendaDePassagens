<?php
	class PagamentosController extends AppController {
		public $helpers = array('Html','Form');
		public $name = 'Pagamentos';
		public $components = array('Session');

		private function getPassagens(){
			$passagens = $this->Pagamento->Passagem->find('list', array('fields' => array('id')));
			$this->set(compact('passagens'));
		}

		function index(){
			$this->set('pagamentos', $this->Pagamento->find('all'));
			$pagamentos = $this->paginate('Pagamento');
			//pr($pagamentos);exit;

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

        function edit($id = null){
            $this->Pagamento->id = $id;
            if($this->request->is('get')) {
                $this->request->data = $this->Pagamento->read();
            } else {
                if($this->Pagamento->save($this->request->data)) {
                    $this->Session->setFlash('O pagamento foi atualizado com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            }

            self::getPassagens();
        }

        function delete($id){
            if(!$this->request->is('post')){
                throw new MethodNotAllowedException();
            }
            if ($this->Pagamento->delete($id)) {
                $this->Session->setFlash('Pagamento deletado com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
	}
?>