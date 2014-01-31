<div class="row">
       
			<h2>Editar Usuario</h2>
				<?php 	
				echo $this->Form->create('User');
				echo $this->Form->input('nome',array('class'=>'form-control'));
				echo $this->Form->input('cpf',array('class'=>'cpf form-control'));
				echo $this->Form->input('username',array('class'=>'form-control','label'=>'E-mail'));
				echo $this->Form->input('endereco',array('class'=>'form-control'));
				echo $this->Form->input('telefone',array('class'=>'phone form-control'));
				$options=array('Funcionario'=>'Funcionario','Cliente'=>'Cliente');
				$attributes=array('label'=>'Tipo');
				echo $this->Form->radio('tipo',$options,$attributes);
				echo "</br>";
				echo $this->Form->label('Senha');
				echo $this->Form->password('password',array('label'=>'Senha','class'=>'form-control','maxlength'=>8));
				$options = array(
					'label'=>'Salvar alteração',
					'class'=>'form-control'
				); 
				echo "<p>";
				echo $this->Form->end($options);
				echo "<p>";
?>
	
</div>

