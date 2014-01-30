<div class="promocoes form">
<?php echo $this->Form->create('Promocao');?>
	<fieldset>
		<legend><?php echo __('Edit Promocao'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('rota_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
