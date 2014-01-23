<?php
class UsuariosController extends AppController{
	public $helpers = array('Html' ,'Form' );
	public $name = 'Usuarios';
	public $components = array('Session');


    function beforeFilter() {
         $this->Auth->userModel = 'usuario';

        $this->Auth->fields = array(
            'email' => 'email',
            'password' => 'senha'
            );
        $this->Auth->loginAction = array(
            'controller' => 'usuarios',
            'action' => 'login'
        );

        $this->Auth->loginRedirect = array(
            'controller' => 'usuarios',

            'action' => 'index'

        );
        // Mensagens de erro

        $this->Auth->loginError = __('Usuário e/ou senha incorreto(s)', true);

        $this->Auth->authError = __('Você precisa fazer login para acessar esta página', true);

        

    }
	function index(){
		$this->set('usuario', $this->Usuario->find('all'));
	}

	public function view($id = null) {
        $this->Usuario->id = $id;
        $this->set('usuario', $this->Usuario->read());
    }

    public function add(){
    	
    	if($this->request->is('post')){
    	   
    		if($this->Usuario->save($this->request->data)){
    			$this->Session->setFlash('Usuario salvo com sucesso!');
    			$this->redirect(array('action'=>'index'));
    		}
    	}
    }



     public function login() {
       echo $this->Auth->login();
            if ($this->Auth->login()) {
        $this->redirect($this->Auth->redirect());
    } else {
        $this->Session->setFlash(__('Invalid username or password, try again'));
    }

     }
     
    public function logout() {
        // Redireciona o usuário para o action do logoutRedirect

        $this->redirect($this->Auth->logout());

    }

}
?>