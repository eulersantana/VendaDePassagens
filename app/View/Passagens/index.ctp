<h1>Passagens</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Cliente</th>
		<th>Funcionário</th>
		<th>Rota</th>
		<th>Ações</th>
	</tr>
	<?php foreach ($passagem as $passagens): ?>
		<tr>
			<th><?php echo $passagens['Passagem']['id'];?></th>
			<th><?php echo $passagens['Passagem']['cliente'];?></th>
			<th><?php echo $passagens['Passagem']['funcionario'];?></th>
			<th><?php echo $passagens['Rota']['trajeto'];?></th>
			<th class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $passagens['Passagem']['id'])); 
				echo $this->Html->link('Edit',array('action' => 'edit', $passagens['Passagem']['id'])); 
				echo $this->Form->postLink('Delete', array('action' => 'delete', $passagens['Passagem']['id']), array('confirm' => 'Você tem certeza ?'));
			?>
			</th>
		</tr>	
	<?php endforeach;?>
</table>