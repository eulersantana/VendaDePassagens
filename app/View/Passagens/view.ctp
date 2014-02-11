<div class="row">
<h2><?php  echo __('Passagem');?></h2>
	<dl>
		<dt><?php echo __('Nome:'); ?></dt>
		<dd>
			<?php echo h($passagem['Passagem']['cliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transação feita (por/no):'); ?></dt>
		<dd>
			<?php echo h($passagem['Passagem']['funcionario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trajeto e Data e Horário:'); ?></dt>
		<dd>
			<?php echo h($passagem['Rota']['trajeto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poltrona:'); ?></dt>
		<dd>
			<?php echo h($passagem['Passagem']['poltrona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor:'); ?></dt>
		<dd>
			<?php echo h($passagem['Rota']['valor']).'.00'; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo de Ônibus'); ?></dt>
		<dd>
			<?php echo h($passagem['Veiculo']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pontos ganhos:'); ?></dt>
		<dd>
			<?php echo h($passagem['Rota']['pontos']); ?>
			&nbsp;
		</dd>

	</dl>
	<?php echo $this->Html->link('Baixar Comprovante',array('action'=>'geraPDF',h($passagem['Passagem']['id'])));	 ?>
</div>

