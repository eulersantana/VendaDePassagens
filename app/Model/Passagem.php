<?php
	class Passagem extends AppModel{
		public $name = 'Passagem';
<<<<<<< HEAD
	
		public $hasOne = array('Rota');
=======
		//public $hasOne = array('Rota');

		//public $belongsTo = array('Rota');

		public $belongsTo = array('Rota');

		public $hasMany = array('Pagamento');

		//public $useTable = 'passagens';
>>>>>>> 2c7def939a05d34867faa7a2f84ca7a2230464dc

	}
?>