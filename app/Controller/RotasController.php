<?php
App::import('Core', 'l10n');

	class RotasController extends AppController {
		public $helpers = array('Html','Form');
		public $name = 'Rotas';
		public $components = array('Session');
		

		function index(){
			$this->set('rota', $this->Rota->find('all'));
		}

		function view($id = null){
			$this->Rota->id = $id;
            $this->set('rota', $this->Rota->read());
		}

		function add(){
			if($this->request->is('post')){
        		if($this->Rota->save($this->request->data)){
        			$this->Session->setFlash('Rota salva com sucesso!');
        			$this->redirect(array('action'=>'index'));
        		}
        	}
		}

		function edit($id = null){
			$this->Rota->id = $id;
			if($this->request->is('get')) {
				$this->request->data = $this->Rota->read();
			} else {
				if($this->Rota->save($this->request->data)) {
					$this->Session->setFlash('A rota foi atualizada com sucesso !');
					$this->redirect(array('action' => 'index'));
				}
			}
		}

		/*
			Não vai permitir a exclusão caso algum veículo possua uma rota direcionada para ele.
			Ver uma solução para isso!
		*/
		function delete($id){
			if(!$this->request->is('post')){
				throw new MethodNotAllowedException();
			}
			if ($this->Rota->delete($id)) {
		        $this->Session->setFlash('Rota deletada com sucesso');
		        $this->redirect(array('action' => 'index'));
    		}
		}
	}
?>