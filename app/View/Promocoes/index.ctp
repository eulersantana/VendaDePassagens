<div class="promocoes index">
	<h2><?php echo __('Promoções');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('descricao');?></th>
			<th><?php echo $this->Paginator->sort('rota_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($promocao as $promocoes): ?>
	<tr>
		<td><?php echo h($promocoes['Promocao']['id']); ?>&nbsp;</td>
		<td><?php echo h($promocoes['Promocao']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($promocoes['Promocao']['rota_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $promocoes['Promocao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $promocoes['Promocao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $promocoes['Promocao']['id']), null, __('Are you sure you want to delete # %s?', $promocoes['Promocao']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Adiconar novo'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Adicionar Rota'), array('controller'=>'rotas','action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Adicionar Veiculo'), array('controller'=>'veiculos','action' => 'add')); ?></li>
	</ul>
</div>
