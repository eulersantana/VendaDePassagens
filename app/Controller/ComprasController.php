<?php 
	/**
	* 
	*/

    App::import('Vendor','xtcpdf'); 
	class ComprasController extends AppController
	{	public $helpers = array('Html','Form');
		public $components = array('Session');
		public $name = 'Compras';
        var $uses = array('Passagem','Rota');

		
        public function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->deny('index','add');

        }

        function view_action() {
            $this->layout = 'layoutPrincipal';
        }

        function getCompras(){
            $this->set('compras_cliente', $this->Compra->find('all'));
        }

        function getRota($id = null){
            $this->Rota->id = $id;
            if($this->request->is('get')) {
                $this->request->data = $this->Rota->read(); 
            }
            
        }

        function index(){
            //$this->set('compras', $this->Compra->find('all'));
            $this->set('compras', $this->paginate());
            $this->set(self::getRota($this->Session->read('Auth.Compra.passagem_rota_id')),$this->paginate());
            self::view_action();

        }

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
            $this->Compra->passagem_id= $id;
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
            // if(!$this->request->is('post')){
            //     throw new MethodNotAllowedException();
            // }
            if ($this->Compra->delete(array('passagem_id'=>$id),true)) {
                $this->Session->setFlash('Compra deletado com sucesso');
                $this->redirect(Router::url('/',true));
            }
        }

        public function view($id = null) {
           
            $this->Compra->user_id = $id;
            // if (!$this->Compra->exists()) {
            //     throw new NotFoundException(__('Compra não existe'));
            // }
            $this->set('user', $this->Compra->read(null, $id));
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
                    <h2> Segunda via: Comprovante de compra de passagem </h2>
                       
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
	}
 ?>