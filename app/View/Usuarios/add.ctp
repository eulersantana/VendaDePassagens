<h1>Adiconar Usuario</h1>
<?php 	
echo $this->Form->create('Usuario');
echo $this->Form->input('nome');
echo $this->Form->input('cpf',array('class'=>'cpf'));
echo $this->Form->input('email');
echo $this->Form->input('endereco');
echo $this->Form->input('telefone',array('class'=>'phone'));
$options=array('Funcionario'=>'Funcionario','Cliente'=>'Cliente');
$attributes=array('legend'=>false);
echo $this->Form->label('Tipo:');
echo $this->Form->radio('tipo',$options,$attributes);
echo $this->Form->label('Senha:');
echo $this->Form->password('senha',array('maxlength'=>8));
echo $this->Form->end('Salvar');
?>