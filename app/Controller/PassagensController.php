<?php
App::uses('AppController', 'Controller');
class PassagensController extends AppController{
	public $helpers = array('Html' ,'Form', 'Js' );
	public $name = 'Passagens';
	public $components = array('Session','RequestHandler');
    var $uses = array('Pagamento','Passagem','Compra','Veiculo');


    public function view_action() {
        // códigos
        $this->layout = 'layoutPrincipal';
    }

    private function getVeiculo(){
         $veiculos = $this->Veiculo->find('list', array('fields' => array('id','tipo')));

         $this->set(compact('veiculos'));
    }
    function beforeFilter() {
        $this->loadModel('Rota');
    }

    public function lista_rotas_json() {
        $this->layout = null;       
             $this->set('rotas', $this->Passagem->Rota->find('all'));
        
       
        
    }
   
	function index(){
		 $this->set('passagem', $this->paginate());
         self::view_action();
	}



	function view($id = null) {
        $this->Passagem->id = $id;
        $this->set('passagem', $this->Passagem->read());
        self::view_action();
    }

    

    public function add(){
            	 
    	if($this->request->is('post')){
            if($this->request->data['Passagem']['tipo'] == 0)
                $tipo = "Cartao";
            else
                $tipo = "Dinheiro";
            
            $userId['user_id'] = $this->Session->read('Auth.User.id');  
            
            $pagamentoInfo = array('parcelas'=>$this->request->data['Passagem']['parcelas'],'status'=>'1','valor_parcelas'=>$this->request->data['Passagem']['valor_parcelas'],'tipo'=>$tipo );
            
            $passagem = array('rota_id'=>$this->request->data['Passagem']['rotas_id'],'veiculo_id'=>$this->request->data['Passagem']['veiculo_id'],'cliente'=>$this->request->data['Passagem']['cliente'],'funcionario'=>$this->request->data['Passagem']['funcionario'],'pagamento_id'=>"");
          
            print_r($passagem);
            if($this->Pagamento->save($pagamentoInfo)){
                $pagamento_id =  $this->Pagamento->getLastInsertId();
                $passagem['pagamento_id'] = $pagamento_id;
                pr($passagem);
                if($this->Passagem->save($passagem)){
                    $passagem_id =  $this->Passagem->getLastInsertId();
                    $userId['passagem_id'] = $passagem_id;
                    $userId['passagem_rota_id'] = $this->request->data['Passagem']['rotas_id'];
                    if($this->Compra->save($userId)){   
                        $this->redirect(array('action'=>'view'));
                    }

                } 
            }
        }

    	   
    		// if($this->Passagem->save($this->request->data)){
    		// 	$this->Session->setFlash('passagem salvo com sucesso!');
    		// 	$this->redirect(array('action'=>'index'));
    		// }
    	       
       
        $this->set('rotas',$this->Passagem->Rota->find('list',array('fields'=>array('id','trajeto'))));
        

        self::getVeiculo();
        self::view_action();
    }

    function edit($id = null){
        $this->Passagem->id = $id;
        if($this->request->is('get')) {
            $this->request->data = $this->Passagem->read();
        } else {
            if($this->Passagem->save($this->request->data)) {
                $this->Session->setFlash('A passagem foi atualizada com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }

        self::getRotas();
        self::view_action();
    }

    function delete($id){
        if(!$this->request->is('post')){
            throw new MethodNotAllowedException();
        }
        if ($this->Passagem->delete($id)) {
            $this->Session->setFlash('Passagem deletada com sucesso');
            $this->redirect(array('action' => 'index'));
        }
    }
}
?>