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
	}
?>