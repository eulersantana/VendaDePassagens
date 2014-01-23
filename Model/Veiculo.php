<?php
	class Veiculo extends AppModel {
		public $name = 'Veiculo';
	    public $hasOne = 'Rota';
	}
?>