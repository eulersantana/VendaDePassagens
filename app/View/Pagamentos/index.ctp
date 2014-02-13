<h1>Pagamentos</h1>
<table class='table'>
	<tr>
		<th>Id</th>
		<th>Tipo</th>
		<th>Valor</th>
		<th>Parcelas</th>
		<th>Status</th>
		<th>Valor da parcela</th>
		<th>Ações</th>
	</tr>
	<?php foreach ($pagamentos as $pagamento): ?>
		<tr>
			<td><?php echo $pagamento['Pagamento']['id'];?></td>
			<td><?php echo $pagamento['Pagamento']['tipo'];?></td>
			<td><?php echo $pagamento['Pagamento']['valor_parcelas'] * ($pagamento['Pagamento']['parcelas'] + 1);?></th>
			<td><?php echo $pagamento['Pagamento']['parcelas'];?></td>
			<td><?php echo $pagamento['Pagamento']['status'];?></td>
			<td><?php echo $pagamento['Pagamento']['valor_parcelas'];?></td>
			<td class='actions'>
				<?php 
					echo $this->Html->link(__('View'), array('action' => 'view', $pagamento['Pagamento']['id'])); 
					echo $this->Html->link('Edit',array('action' => 'edit', $pagamento['Pagamento']['id'])); 
					echo $this->Form->postLink(
			        'Delete',
			        array('action' => 'delete', $pagamento['Pagamento']['id']),
			        array('confirm' => 'Você tem certeza ?'));
				?>
		</td>
	<?php endforeach;?>
</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'btn btn-default'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'btn btn-default'));
	?>
	</div>
