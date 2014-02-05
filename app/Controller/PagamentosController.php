<?php
	class PagamentosController extends AppController {
		public $helpers = array('Html','Form');
		public $name = 'Pagamentos';
		public $components = array('Session');

        public function view_action() {
            // códigos
            $this->layout = 'layoutPrincipal';
        }


		function index(){
			$this->set('pagamentos', $this->paginate());
			$pagamentos = $this->paginate('Pagamento');
			//pr($pagamentos);exit;
            self::view_action();

		}

        function view($id = null) {
            $this->Pagamento->id = $id;
            $this->set('pagamentos', $this->Pagamento->read());
        }

		function add(){
			if($this->request->is('post')){
        		if($this->Pagamento->save($this->request->data)){
        			$this->Session->setFlash('Pagamento salvo com sucesso!');
        			$this->redirect(array('action'=>'index'));
        		}
        	}
            self::view_action();
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
            self::view_action();
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