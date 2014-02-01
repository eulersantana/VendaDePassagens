<div class="row">
<h2>Adicionar Promocão</h2>
<?php

	echo $this->Form->create('Promocao');
	echo $this->Form->input('descricao',array('class'=>'form-control','type'=>'text'));
	echo $this->Form->input('rota_id',array('class'=>'form-control'));
	$options = array(
					'label'=>'Salvar',
					'class'=>'form-control',
					'style'=>'width: 100px'
				); 
	echo "<p>";
	echo $this->Form->end($options);
	echo "</p>";
?>
</div>