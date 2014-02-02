<h1>Pagamentos</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Tipo</th>
		<th>Valor</th>
		<th>Parcelas</th>
		<th>Status</th>
		<th>Valor da parcela</th>
		<th>Código da passagem</th>
		<th>Ações</th>
	</tr>
	<?php foreach ($pagamentos as $pagamento): ?>
		<tr>
			<th><?php echo $pagamento['Pagamento']['id'];?></th>
			<th><?php echo $pagamento['Pagamento']['tipo'];?></th>
			<th><?php echo $pagamento['Pagamento']['valor'];?></th>
			<th><?php echo $pagamento['Pagamento']['parcelas'];?></th>
			<th><?php echo $pagamento['Pagamento']['status'];?></th>
			<th><?php echo $pagamento['Pagamento']['valor_parcelas'];?></th>
			<th><?php echo $pagamento['Pagamento']['passagem_id'];?></th>
			<th>
				<?php 
					echo $this->Html->link(__('View'), array('action' => 'view', $pagamento['Pagamento']['id'])); 
					echo $this->Html->link('Edit',array('action' => 'edit', $pagamento['Pagamento']['id'])); 
					echo $this->Form->postLink(
			        'Delete',
			        array('action' => 'delete', $pagamento['Pagamento']['id']),
			        array('confirm' => 'Você tem certeza ?'));
				?>
		</tr>
	<?php endforeach;?>
</table>