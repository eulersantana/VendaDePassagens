<?php
	class Passagem extends AppModel{
		public $name = 'Passagem';
		public $belongsTo = array('Rota','Pagamento','Veiculo');
		public $hasOne = array('Compra');

		
	}
?>