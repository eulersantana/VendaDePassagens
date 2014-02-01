<div class="row">
<h2>Editar Veículo</h2>
<?php
	echo $this->Form->create('Veiculo',array('action'=>'edit'));
	echo $this->Form->input('tipo',array('class'=>'form-control'));
	echo $this->Form->input('rota_id',array('class'=>'form-control'));
	echo $this->Form->input('poltronas_livre',array('class'=>'form-control'));
	echo $this->Form->input('poltronas_ocupadas',array('class'=>'form-control'));
	$options = array(
					'label'=>'Salvar Alteração',
					'class'=>'form-control',
					'style'=>'width: 160px'
				); 
	echo "<p>";
	echo $this->Form->end($options);
	echo "</p>"
?>
</div>