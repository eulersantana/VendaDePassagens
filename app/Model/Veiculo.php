<?php
	class Veiculo extends AppModel {
		public $name = 'Veiculo';
	   	//public $hasOne = 'Rota';

	   	// public $hasOne = array(
	   	// 	'Rota' => array(
	   	// 		'className' => 'Rota',
	   	// 		'foreignKey' => 'id',
	   	// 		'conditions' => array()
	   	// 		)
	   	// 	);

	   	public $belongsTo = array('Rota');

	   	public $validate = 	array(
	   		'tipo' => array(
	   			'required' => true,
	   			'message' => 'Campo obritorio'
	   			)
	   		);


	}
?>