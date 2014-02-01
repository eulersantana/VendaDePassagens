<div class="veiculos view">
<h2><?php  echo __('Veiculo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poltronas Livre'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['poltronas_livre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poltronas Ocupadas'); ?></dt>
		<dd>
			<?php echo h($veiculo['Veiculo']['poltronas_ocupadas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rota'); ?></dt>
		<dd>
			<?php echo $veiculo['Rota']['inicio'].' - '.$veiculo['Rota']['fim'].' - '.$veiculo['Rota']['data_hora']; ?>
			&nbsp;
		</dd>
	</dl>
</div>

