<h1>Adicionar Passagem</h1>
<?php
	echo $this->Form->create('Passagem',array('class'=>'form-control'));
	echo $this->Form->input('cliente',array('class'=>'form-control'));	
	echo $this->Form->input('funcionario',array('class'=>'form-control'));
	echo $this->Form->input('rota_id',array('class'=>'form-control'));
	$options = array(
					'label'=>'Salvar',
					'class'=>'form-control'
				); 
	echo "<p>";
	echo $this->Form->end($options);
	echo "<p>";
?>