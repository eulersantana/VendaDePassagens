<div class="paging">
	<ul class="nav nav-pills">
	  <li><?php echo $this->Html->link(__('Novo Veiculo'), array('action' => 'add')); ?></li>
	</ul>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><?php echo __('Veiculos');?></div>
  <div class="panel-body">
    <!-- <p>...</p> -->
  </div>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('#');?></th>
			<th><?php echo $this->Paginator->sort('Tipo');?></th>
			<th><?php echo $this->Paginator->sort('Poltronas Livre');?></th>
			<th><?php echo $this->Paginator->sort('Poltronas Ocupadas');?></th>
			<th><?php echo $this->Paginator->sort('rota_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($veiculos as $veiculo): ?>
	<tr>
		<td><?php echo h($veiculo['Veiculo']['id']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['poltronas_livre']); ?>&nbsp;</td>
		<td><?php echo h($veiculo['Veiculo']['poltronas_ocupadas']); ?>&nbsp;</td>
		<td><?php echo $veiculo['Rota']['inicio'].' - '.$veiculo['Rota']['fim'].' - '.$veiculo['Rota']['data_hora']; ?></td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $veiculo['Veiculo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $veiculo['Veiculo']['id']), null, __('Are you sure you want to delete # %s?', $veiculo['Veiculo']['id'])); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
	

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'btn btn-default'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'btn btn-default'));
	?>
	</div>
</div>
