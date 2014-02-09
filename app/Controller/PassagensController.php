<?php

App::import('Vendor','xtcpdf'); 
App::uses('AppController', 'Controller');
class PassagensController extends AppController{
	public $helpers = array('Html' ,'Form', 'Js' );
	public $name = 'Passagens';
	public $components = array('Session','RequestHandler');
    public $hasOne = array('Veiculo');
    var $uses = array('Pagamento','Passagem','Compra','Veiculo','User');


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

    private function getRota($id = null){
        $this->Rota->id = $id;

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
          
            
            if($this->Pagamento->save($pagamentoInfo)){
                $pagamento_id =  $this->Pagamento->getLastInsertId();
                $passagem['pagamento_id'] = $pagamento_id;
               
                if($this->Passagem->save($passagem)){
                    $passagem_id =  $this->Passagem->getLastInsertId();
                    $userId['passagem_id'] = $passagem_id;
                    $userId['passagem_rota_id'] = $this->request->data['Passagem']['rotas_id'];
                    
                    if($this->Compra->save($userId)){  
                        $user = $this->User->findById($this->Session->read('Auth.User.id'));

                        $user['User']['pontos'] = (int)$user['User']['pontos'] + (int)$this->Rota->findById($this->request->data['Passagem']['rotas_id'])['Rota']['pontos'];
                        unset($user['User']['password']);
                        
                        $this->User->save($user);
                        $this->redirect(array('action'=>'view',$passagem_id));
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
    function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid passagem'));
        }

        $passagem = $this->Passagem->findById($id);
        if (!$passagem) {
            throw new NotFoundException(__('Invalid passagem'));
        }
        $this->set('passagem', $passagem);
        self::view_action();
    }

    function geraPDF($id){ 
        $passagem = $this->Passagem->findById($id);
        $tcpdf = new XTCPDF(); 
        $textfont = 'aefurat'; // looks better, finer, and more condensed than 'dejavusans' 

        // $tcpdf->SetAuthor("BuyPass - BuyPass.com.br"); 
        $tcpdf->SetAutoPageBreak( false ); 
        // $tcpdf->setHeaderFont(array($textfont,'',40)); 
        // // $tcpdf->xheadercolor = array(150,0,0); 
        // $tcpdf->xheadertext = 'BuyPas'; 
        $tcpdf->xfootertext = 'Copyright Â© %d BuyPass direitos reservadas.'; 
         $tcpdf->SetFont($textfont,'B',16);
        // add a page (required with recent versions of tcpdf) 
        $tcpdf->AddPage(); 
       
        $tcpdf->SetTextColor(0, 0, 0); 
        // set text shadow effect
$tcpdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

        $string = '<div class="row">
                    <h2> Comprovante de compra de passagem </h2>
                       
                     <span>Nome:</span>'.' '. h($passagem['Passagem']['cliente']) .'<br>'.
                     '<span>Transação feita (por/no):</span>'.' '. h($passagem['Passagem']['funcionario']).'<br>'. 
                     '<span>Trajeto e Data e Horário:</span>'.' '. h($passagem['Rota']['trajeto']).'<br>'.
                     '<span>Valor:</span>'.' '.  h($passagem['Rota']['valor']).'.00'.'<br>'.
                     '<span>Tipo de Ônibus:</span>'.' '. h($passagem['Veiculo']['tipo']) .'<br>'. 
                     '<span>Pontos ganhos:</span>'.' '. h($passagem['Rota']['pontos']).'
                        
                </div>
';

       $html = <<<EOD
        $string
EOD;

// Print text using writeHTMLCell()
        $tcpdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        // ... 
        // etc. 
        // see the TCPDF examples  

        echo $tcpdf->Output('BuyPass.pdf', 'D'); 
        $this->redirect(array('action'=>'view',$id));
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

    public function delete($id,$id_rota){
        
        // if(!$this->request->is('post')){
        //     throw new MethodNotAllowedException();
        // }
        $this->Passagem->id = $id;
        $this->Passagem->rotas_id = $id_rota;
   
        if ($this->Passagem->delete() ){
            $this->Session->setFlash('Passagem deletada com sucesso');
            $this->redirect(Router::url('/',true));
        }
    }
}
?>