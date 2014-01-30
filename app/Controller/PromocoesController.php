<?php
    class PromocoesController extends AppController {
        public $helpers = array('Html','Form');
        public $name = 'Promocoes';
        public $components = array('Session');

        private function getRotas(){
            $rotas = $this->Promocao->Rota->find('list', array('fields' => array('id','trajeto')));

            $this->set(compact('rotas'));
        }

        function index(){
            
            $this->set('promocao', $this->paginate());
        }

        function view($id = null){            

            $this->Promocao->id = $id;
            $this->set('promocao', $this->Promocao->read());


        }

        function add(){
            //$rotas = $this->Promocao->Rota->find('list', array('fields' =>'trajeto'));
            //$this->set('rotas', $rotas);
            if($this->request->is('post')){
                if($this->Promocao->save($this->request->data)){
                    $this->Session->setFlash('Promocao salvo com sucesso!');
                    $this->redirect(array('action'=>'index'));
                }
            }

            self::getRotas();
        }

        function edit($id = null){
            $this->Promocao->id = $id;
            if($this->request->is('get')) {
                $this->request->data = $this->Promocao->read();
            } else {
                if($this->Promocao->save($this->request->data)) {
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
            if ($this->Promocao->delete($id)) {
                $this->Session->setFlash('Promocao deletado com sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
?>