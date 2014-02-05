<div class="row">
<h2>Adicionar Veículo</h2>
<?php
	echo $this->Form->create('Veiculo');
	echo $this->Form->input('tipo',array('class'=>'form-control'));
	// echo $this->Form->input('rota_id',array('class'=>'form-control'));
	echo $this->Form->input('poltronas_livre',array('type'=>'text','class'=>'form-control'));
	echo $this->Form->input('poltronas_ocupadas',array('type'=>'text','class'=>'form-control'));
	$options = array(
					'label'=>'Salvar',
					'class'=>'form-control',
					'style'=>'width: 100px'
				); 
	echo "<p>";
	echo $this->Form->end($options);
	echo "</p>"
?>
</div>