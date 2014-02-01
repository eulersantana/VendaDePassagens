<h1>Adicionar Pagamento</h1>
<?php
	echo $this->Form->create('Pagamento');
	echo $this->Form->input('tipo');
	echo $this->Form->input('valor');
	echo $this->Form->input('parcelas');
	echo $this->Form->input('status');
	echo $this->Form->input('valor_parcelas');
	echo $this->Form->input('passagem_id',array('options' => $passagens, 'empty' => 'Selecione o código da passagem', 'label' => 'Código da passagem'));
	echo $this->Form->end('Salvar');
?>