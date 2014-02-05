<div class="veiculos view">
<h2><?php  echo __('Veiculo');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($veiculos['Veiculo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($veiculos['Veiculo']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poltronas Livre'); ?></dt>
		<dd>
			<?php echo h($veiculos['Veiculo']['poltronas_livre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Poltronas Ocupadas'); ?></dt>
		<dd>
			<?php echo h($veiculos['Veiculo']['poltronas_ocupadas']); ?>
			&nbsp;
		</dd>
		<!-- <dt><?php //echo __('Rota'); ?></dt> -->
		<!-- <dd>
			<?php //echo $veiculos['Rota']['inicio'].' - '.$veiculos['Rota']['fim'].' - '.$veiculos['Rota']['data_hora']; ?>
			&nbsp;
		</dd> -->
	</dl>
</div>

