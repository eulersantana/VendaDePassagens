<?php
	class VeiculosController extends AppController {
		public $helpers = array('Html','Form');
		public $name = 'Veiculos';
		public $components = array('Session');

		private function getRotas(){
			$rotas = $this->Veiculo->Rota->find('list', array('fields' => array('id','trajeto')));

			$this->set(compact('rotas'));
		}

		function index(){
			$this->set('veiculo', $this->Veiculo->find('all'));

			//self::getRotas();
		}

		function view($id = null){
			

			$this->Veiculo->id = $id;
            $this->set('veiculo', $this->Veiculo->read());


		}

		function add(){
			//$rotas = $this->Veiculo->Rota->find('list', array('fields' =>'trajeto'));
			//$this->set('rotas', $rotas);
			if($this->request->is('post')){
        		if($this->Veiculo->save($this->request->data)){
        			$this->Session->setFlash('Veiculo salvo com sucesso!');
        			$this->redirect(array('action'=>'index'));
        		}
        	}

        	self::getRotas();
		}

		function edit($id = null){
			$this->Veiculo->id = $id;
			if($this->request->is('get')) {
				$this->request->data = $this->Veiculo->read();
			} else {
				if($this->Veiculo->save($this->request->data)) {
					$this->Session->setFlash('O veículo foi atualizado com sucesso !');
					$this->redirect(array('action' => 'index'));
				}
			}

			self::getRotas();
		}


		function delete($id){
			if(!$this->request->is('post')){
				throw new MethodNotAllowedException();
			}
			if ($this->Veiculo->delete($id)) {
		        $this->Session->setFlash('Veiculo deletado com sucesso');
		        $this->redirect(array('action' => 'index'));
    		}
		}
	}
?>