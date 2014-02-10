<?php 
	
	class Compra extends AppModel
	{
		public $name = 'Passagens-User';
		public $belongsTo = array('User','Passagem');
		// var $hasAndBelongsToMany = array('User','Passagem');
		
		
	}
 ?>