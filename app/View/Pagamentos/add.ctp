<h1>Adicionar Pagamento</h1>
<?php
	echo $this->Form->create('Pagamento');
	echo $this->Form->input('valor');
	echo $this->Form->input('parcela');
	echo $this->Form->input('status');
	echo $this->Form->input('valor_parcelas');
	echo $this->Form->input('passagem_id',array('label' => 'Comprador'));
	echo $this->Form->end('Salvar');
?>