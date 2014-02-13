<h1>Pagamentos</h1>
<h3>Selecione o mês ou dia para ver o histórico de faturamento</h3>
<?php echo $this->Form->create('pagamento', array('type' => 'get', 'action' => 'historico')); ?>
<p>Dia: 
<?php echo $this->Form->dateTime('dia', 'DMY', null); ?>
</p>
<p>Mês: 
<?php echo $this->Form->dateTime('mes', 'MY', null); ?>
</p>
<?php $options = array(
                'label'=>'Ver Faturamento',
	        'class'=>'form-control',
		'style'=>'width: 200px'
		); 
echo $this->Form->end($options); ?>
