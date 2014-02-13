<?php  echo $this->Html->script('jquery.ajaxRotas'); ?>
<h1>Adicionar Passagem</h1>

<?php
	echo $this->Form->create('Passagem');
	echo $this->Form->input('cliente',array('class'=>'form-control','value'=>$this->Session->read('Auth.User.nome')));

	echo $this->Form->input('Usar pontos',array('class'=>'form-control','type'=>'select','options'=>'','id'=>'pontosCompra','empty'=>'Use seus pontos para compra a passagem'));	
	echo $this->Form->input('funcionario',array('class'=>'form-control','type'=>"hidden",'value'=>'site'));
	echo $this->Form->input('veiculo_id',array('Tipo do Veiculo','class'=>'form-control','type' => 'select' ,'id' => 'veiculos', 'empty' => 'selecione o tipo do veiculo'));
	echo $this->Form->input('rotas_id',array('class'=>'form-control','type' => 'select', 'options' => $rotas, 'id' => 'rotas', 'empty' => 'selecione uma rota',"onBlur"=>" valores();"));
	echo $this->Form->input('poltrona',array('class'=>'form-control'));	

	echo $this->Form->input('valor',array('id' => 'valor','class'=>'form-control','readonly'=>"true"));
	$parcelas = array('1','2','3');
	echo $this->Form->input('parcelas',array('class'=>'form-control','type' => 'select', 'options' => $parcelas,'id'=>'part','onBlur'=>'subTotal();' ));
	$tipo = array('Cartão','Dinheiro');
	echo $this->Form->input('tipo',array('class'=>'form-control','type' => 'select', 'options' => $tipo,'id'=>'tipo','onBlur'=>'tipoPar();' ));
	echo $this->Form->input('valor_parcelas',array('class'=>'form-control','id'=>'parcelas','readonly'=>"true"));
	$options = array(
					'label'=>'Proximo',
					'class'=>'form-control',
					'style'=>'width:100px;'
				); 
	echo "<p>";
	echo $this->Form->end($options);
	echo "<p>";
?>

