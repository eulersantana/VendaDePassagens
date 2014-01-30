<?php

	class Passagem extends AppModel{
		public $name = 'Passagem';
	
		public $hasOne = array('Rota');

	}
?>