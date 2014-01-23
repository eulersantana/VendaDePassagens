<h1>Adicionar Veículo</h1>
<?php
	echo $this->Form->create('Veiculo');
	echo $this->Form->input('tipo');
	echo $this->Form->input('rotas_id');
	echo $this->Form->input('poltronas_livre');
	echo $this->Form->input('poltronas_ocupadas');
	echo $this->Form->end('Salvar');
?>