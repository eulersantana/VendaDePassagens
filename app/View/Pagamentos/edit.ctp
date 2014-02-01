<h1>Editando Pagamento</h1>
<?php
	echo $this->Form->create('Pagamento',array('action' => 'edit'));
	echo $this->Form->input('tipo');
	echo $this->Form->input('valor');
	echo $this->Form->input('parcelas');
	echo $this->Form->input('status');
	echo $this->Form->input('valor_parcelas');
	echo $this->Form->input('passagem_id',array('options' => $passagens, 'label' => 'Código da passagem'));
	echo $this->Form->end('Salvar Pagamento');
?>