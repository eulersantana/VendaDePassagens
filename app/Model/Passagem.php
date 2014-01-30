<?php
	class Passagem extends AppModel{
		public $name = 'Passagem';

		//public $hasOne = array('Rota');

		//public $belongsTo = array('Rota');

		public $belongsTo = array('Rota');

		public $hasMany = array('Pagamento');

		//public $useTable = 'passagens';


	}
?>