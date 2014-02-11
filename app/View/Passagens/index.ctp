<h1>Passagens</h1>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><?php echo __('Passagens');?></div>
  <div class="panel-body">
    <!-- <p>...</p> -->
  </div>
	<table class="table">
	<tr>
		<th>Id</th>
		<th>Cliente</th>
		<th>Funcionário</th>
		<th>Rota</th>
		<th>Poltrona</th>
		<th>Ações</th>
	</tr>
	<?php
	$i = 0;
	foreach ($passagens as $passagem): ?>
		<tr>
			<td><?php echo h($passagem['Passagem']['id']);?>&nbsp;</td>
			<td><?php echo $passagem['Passagem']['cliente'];?>&nbsp;</td>
			<td><?php echo $passagem['Passagem']['funcionario'];?>&nbsp;</td>
			<td><?php echo $passagem['Rota']['trajeto'];?>&nbsp;</td>
			<td><?php echo $passagem['Passagem']['poltrona'];?>&nbsp;</td>
			<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $passagem['Passagem']['id'])); 
				echo $this->Html->link(__('Edit'),array('action' => 'edit', $passagem['Passagem']['id'])); 
				echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $passagem['Passagem']['id']), array('confirm' => 'Você tem certeza ?'));
			?>
			</td>
		</tr>	
	<?php endforeach;?>
</table>
</div>
