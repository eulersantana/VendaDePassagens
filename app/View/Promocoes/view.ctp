<div class="users view">
<h2><?php  echo __('Promoção');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($promocao['Promocao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrição'); ?></dt>
		<dd>
			<?php echo h($promocao['Promocao']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rota'); ?></dt>
		<dd>
			<?php echo h($promocao['Promocao']['rota_id']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
