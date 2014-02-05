
<div class="paging">
	<ul class="nav nav-pills">
	  <li><?php echo $this->Html->link(__('Novo Rota'), array('action' => 'add')); ?></li>
	</ul>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><?php echo __('Rotas');?></div>
  <div class="panel-body">
    <!-- <p>...</p> -->
  </div>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('#');?></th>
			<th><?php echo $this->Paginator->sort('Valor');?></th>
			<th><?php echo $this->Paginator->sort('Inicio');?></th>
			<th><?php echo $this->Paginator->sort('Fim');?></th>
			<th><?php echo $this->Paginator->sort('Pontos');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($rotas as $rota): ?>
	<tr>
		<td><?php echo h($rota['Rota']['id']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['valor']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['inicio']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['fim']); ?>&nbsp;</td>
		<td><?php echo h($rota['Rota']['pontos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rota['Rota']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rota['Rota']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rota['Rota']['id']), null, __('Are you sure you want to delete # %s?', $rota['Rota']['id'])); ?>
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

