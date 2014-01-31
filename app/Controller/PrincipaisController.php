<?php 
	/**
	* 
	*/
	class PrincipaisController extends AppController
	{
		public $helpers = array ('Html','Form');

		public function view_action() {
		    // códigos
		    $this->layout = 'layoutPrincipal';
		}

		function index(){
			self::view_action();
		}
	}
 ?>