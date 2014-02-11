<div class="row">
       
<h2>Editar Passagem</h2>
				<?php 	
	echo $this->Form->create('Passagem',array('url' => array('controller' => 'passagens', 'action' => 'edit')));
	echo $this->Form->input('cliente');
	echo $this->Form->input('funcionario');
	echo $this->Form->input('rota_id');
	echo $this->Form->end('Salvar passagem');
				echo "<p>";
?>
	
</div>

<?php
?>
