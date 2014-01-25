<!-- File: /app/View/Rotas/edit.ctp -->

<h1>Editando Rotas</h1>
<?php
	echo $this->Form->create('Rota',array('action' => 'edit'));
	echo $this->Form->input('inicio');
	echo $this->Form->input('fim');
	echo $this->Form->input('data_hora',array(
		'type' => 'datetime',
		'dateFormat' => 'DMY'));
	echo $this->Form->end('Salvar rota');
?>