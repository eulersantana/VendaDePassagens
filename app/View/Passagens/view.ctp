<div class="passagens view">
<h2><?php  echo __('Passagem');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($passagem['Passagem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo h($passagem['Passagem']['cliente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Funcionário'); ?></dt>
		<dd>
			<?php echo h($passagem['Passagem']['funcionario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rota'); ?></dt>
		<dd>
			<?php echo $passagem['Rota']['inicio'].' - '.$passagem['Rota']['fim'].' - '.$passagem['Rota']['data_hora']; ?>
			&nbsp;
		</dd>
	</dl>
</div>

