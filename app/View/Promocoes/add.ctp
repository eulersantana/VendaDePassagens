<h1>Adicionar Promocão</h1>
<?php

	echo $this->Form->create('Promocao');
	echo $this->Form->input('descricao');
	echo $this->Form->input('rota_id');
	echo $this->Form->end('Salvar');
?>