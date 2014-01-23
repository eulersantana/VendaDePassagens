<?php
	class Rota extends AppModel {
		public $name = 'Rota';
			    public $virtualFields = array(
			'trajeto' => 'CONCAT(inicio, " - " , fim)'
			);
	}