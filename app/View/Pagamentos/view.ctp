<div class="pagamentos view">
<h2><?php  echo __('Pagamento');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pagamentos['Pagamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($pagamentos['Pagamento']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($pagamentos['Pagamento']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parcelas'); ?></dt>
		<dd>
			<?php echo h($pagamentos['Pagamento']['parcelas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Parcelas'); ?></dt>
		<dd>
			<?php echo h($pagamentos['Pagamento']['valor_parcelas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Código da Passagem'); ?></dt>
		<dd>
			<?php echo h($pagamentos['Pagamento']['passagem_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

