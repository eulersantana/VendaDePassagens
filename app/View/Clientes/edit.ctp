<div class="row">
       
			<h2>Editar Perfil</h2>
				<?php 	
				echo $this->Form->create('Cliente',array('action'=>'edit'));
				echo $this->Form->input('nome',array('class'=>'form-control'));
				echo $this->Form->input('cpf',array('class'=>'cpf form-control'));
				echo $this->Form->input('username',array('class'=>'form-control','label'=>'E-mail'));
				echo $this->Form->input('endereco',array('class'=>'form-control'));
				echo $this->Form->input('telefone',array('class'=>'phone form-control'));
				echo "</br>";
				echo $this->Form->label('Senha');
				echo $this->Form->password('password',array('label'=>'Senha','class'=>'form-control','maxlength'=>8));
				$options = array(
					'label'=>'Salvar alteracao',
					'class'=>'form-control',
					'style'=>'width: 160px'
				); 
				echo "<p>";
				echo $this->Form->end($options);
				echo "<p>";
?>
	
</div>

