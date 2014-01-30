<?php
	class Pagamento extends AppModel {
		public $name = 'Pagamento';
		public $belongsTo = array('Passagem');
	}
?>