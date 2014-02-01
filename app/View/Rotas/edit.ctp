<div class="row">
	<h2>Editar Rota</h2>
<?php 	
	echo $this->Form->create('Rota',array('action'=>'edit'));
	echo $this->Form->input('inicio',array('class'=>'form-control'));
	echo $this->Form->input('fim',array('class'=>'form-control'));
	echo $this->Form->label('Data e hora');
	echo '<div class="form-control">';
	echo $this->Form->input('',array(
				'type' => 'datetime',
				'dateFormat' => 'DMY',
				'minYear' => date('Y') - 40,
				'style'=>'width: 100px;'));
	echo '</div>';
	echo $this->Form->input('pontos',array('class'=>'form-control','type'=>'text'));
	
	$options = array(
					'label'=>'Salvar alteração',
					'class'=>'form-control',
					'style'=>'width: 160px;'
				); 
	echo "<p>";
	echo $this->Form->end($options);
	echo "</p>"
?>
</div>