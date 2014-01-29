<h1>Editando Veículo</h1>
<?php
	echo $this->Form->create('Veiculo',array('action' => 'edit'));
	echo $this->Form->input('tipo');
	echo $this->Form->input('poltronas_livre');
	echo $this->Form->input('poltronas_ocupadas')
	echo $this->Form->end('Salvar veiculo');
?>