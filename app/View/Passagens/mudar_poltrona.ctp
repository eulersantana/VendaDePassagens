<div class="row">
       
<h2>Mudar Poltrona</h2>
				<?php 	
	echo $this->Form->create('Passagem',array('url' => array('controller' => 'passagens', 'action' => 'mudar_poltrona')));
	echo $this->Form->input('poltrona');
	echo $this->Form->end('Salvar passagem');
				echo "<p>";
?>
	
</div>

<?php
?>
