<?php 
	
	class Compra extends AppModel
	{
		public $name = 'Compra';
		public $belongsTo = array('User','Passagem');

		
	}
 ?>