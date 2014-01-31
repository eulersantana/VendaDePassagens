<div class="paging">
	<ul class="nav nav-pills">
	  <li><?php echo $this->Html->link(__('Novo Usuário'), array('action' => 'add')); ?></li>
	</ul>
</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><?php echo __('Users');?></div>
  <div class="panel-body">
    <!-- <p>...</p> -->
  </div>
	<table class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('tipo');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo "******" ?>&nbsp;</td>
		<td><?php echo h($user['User']['tipo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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

