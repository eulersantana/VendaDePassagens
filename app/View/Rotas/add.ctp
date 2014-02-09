
<?php echo $this->Html->script('bootstrap');?>
<div class="row">
	<h2>Adicionar Rota</h2>
<?php 	
	echo $this->Form->create('Rota');
	echo $this->Form->input('valor',array('type'=>'text','class'=>'form-control money'));
	echo $this->Form->input('inicio',array('class'=>'form-control'));
	echo $this->Form->input('fim',array('class'=>'form-control'));
	echo $this->Form->label('Data e hora');
	echo '<div class="form-control">';
	echo $this->Form->input('',array(
				'type' => 'datetime',
				'dateFormat' => 'DMY',
				'minYear' => date('Y') + 40,
				'style'=>'width: 100px;'));
	echo '</div>';
	echo $this->Form->input('pontos',array('class'=>'form-control ponts','type'=>'text'));
	
	$options = array(
					'label'=>'Salvar',
					'class'=>'form-control',
					'style'=>'width: 100px; display:inline'
				); 
	echo "<p>";
	echo $this->Form->end($options);
	echo "</p>"
?>
</div>