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
	function faturamento(){
            self::view_action();

		}
	function historico(){
          $dia = $this->params['url']['dia'];
          $mes = $this->params['url']['mes'];
          if ($dia['day'] != '' && $dia['month'] != '' && $dia['year'] != '') {
                        $startdate = '"'.$dia['year'].'-'.$dia['month'].'-'.$dia['day'].' 00:00:00'.'"';
                        $enddate = '"'.$dia['year'].'-'.$dia['month'].'-'.$dia['day'].' 23:59:59'.'"';
			$this->set('pagamentos', $this->Pagamento->find('all', array('conditions' => array('Pagamento.created_at BETWEEN '.$startdate.' AND '.$enddate))));
          } else if ($mes['month'] != '' && $mes['year'] != '') {
                        $startdate = '"'.$mes['year'].'-'.$mes['month'].'-'.'01'.' 00:00:00'.'"';
                        $enddate = '"'.$mes['year'].'-'.$mes['month'].'-'.'31'.' 23:59:59'.'"';
            
			$this->set('pagamentos', $this->Pagamento->find('all', array('conditions' => array('Pagamento.created_at BETWEEN '.$startdate.' AND '.$enddate))));
          }
			$pagamentos = $this->paginate('Pagamento');
            self::view_action();

		}
	}
?>
