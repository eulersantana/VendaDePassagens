<?php 
	/**
	* 
	*/
	class ComprasController extends AppController
	{	public $helpers = array('Html','Form');
		public $components = array('Session');
		public $name = 'Compras';
		
		function add(){
			if($this->request->is('post')){
        		if($this->Compra->save($this->request->data)){
        			$this->Session->setFlash('Compra salvo com sucesso!');
        			$this->redirect(Router::url('/',true));
        		}
        	}
            self::view_action();
		}

        function edit($id = null){
            $this->Compra->id = $id;
            if($this->request->is('get')) {
                $this->request->data = $this->Compra->read();
            } else {
                if($this->Compra->save($this->request->data)) {
                    $this->Session->setFlash('O Compra foi atualizado com sucesso!');
                    $this->redirect(Router::url('/',true));
                }
            }

            self::getPassagens();
            self::view_action();
        }

        function delete($id){
            if(!$this->request->is('post')){
                throw new MethodNotAllowedException();
            }
            if ($this->Compra->delete($id)) {
                $this->Session->setFlash('Compra deletado com sucesso');
                $this->redirect(Router::url('/',true));
            }
        }
	}
 ?>