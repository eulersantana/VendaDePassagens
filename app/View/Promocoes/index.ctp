<div class="paging">
	<ul class="nav nav-pills">
	  <li><?php echo $this->Html->link(__('Nova promoção'), array('action' => 'add')); ?></li>
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
			<?php echo $this->Html->link(__('Ver'), array(
			'action' => 'view', 
			$promocoes['Promocao']['id'],
			'class'=>'btn btn-default'
			)); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $promocoes['Promocao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Apagar'), array('type'=>'button','action' => 'delete', $promocoes['Promocao']['id']), null, __('Are you sure you want to delete # %s?', $promocoes['Promocao']['id']));  ?>
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

