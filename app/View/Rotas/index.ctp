<h1>Rotas</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Inicio</th>
		<th>Fim</th>
		<th>Pontos</th>
		<th>Ação</th>
	</tr>
	<?php foreach ($rota as $rotas): ?>
	<tr>
		<td><?php echo $rotas['Rota']['id']; ?></td>
		<td><?php echo $this->Html->link($rotas['Rota']['inicio'],array('controller'=> 'rotas', 'action'=> 'view', $rotas['Rota']['id'])); ?></td>
		<td><?php echo $rotas['Rota']['fim']; ?></td>
		<td><?php echo $rotas['Rota']['pontos'];?></td>
		<td><?php echo $this->Html->link('Edit',array('action' => 'edit', $rotas['Rota']['id'])); ?></td>
		<td>
			<?php echo $this->Form->postLink(
		        'Delete',
		        array('action' => 'delete', $rotas['Rota']['id']),
		        array('confirm' => 'Você tem certeza ?'));
		    ?>
		</td>
	</tr>
<?php endforeach;?>
</table>