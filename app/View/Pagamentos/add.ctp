
<h2>Adicionar Pagamento</h2>
<?php
	echo $this->Form->create('pagamento');
	echo $this->Form->input('parcela');
	echo $this->Form->input('status');
	echo $this->Form->input('valor_parcelas');
	$options = array(
			'label'=>'Salvar',
			'class'=>'form-control',
			'style'=>'width: 100px'
		); 
	echo "<p>";
	echo $this->Form->end($options);
	echo "<p>";
?>
	


