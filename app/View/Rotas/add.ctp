<h1>Adiconar Rotas</h1>
<?php 	
	echo $this->Form->create('Rota');
	echo $this->Form->input('inicio');
	echo $this->Form->input('fim');
	echo $this->Form->input('data_hora',array(
			'type' => 'datetime',
			'dateFormat' => 'DMY'));
	echo $this->Form->input('pontos');
	echo $this->Form->end('Salvar');
?>