<h1>Adicionar Passagem</h1>
<?php
	echo $this->Form->create('Passagens');
	echo $this->Form->input('cliente');	
	echo $this->Form->input('funcionario');
	echo $this->Form->input('rota_id');
	echo $this->Form->end('Salvar');
?>