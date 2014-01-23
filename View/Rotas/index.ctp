<h1>Rotas</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Inicio</th>
		<th>Fim</th>
	</tr>
	<?php foreach ($rota as $rotas): ?>
	<tr>
		<td><?php echo $rotas['Rota']['id']; ?></td>
		<td><?php echo $this->Html->link($rotas['Rota']['inicio'],array('controller'=> 'rotas', 'action'=> 'view', $rotas['Rota']['id'])); ?></td>
		<td><?php echo $rotas['Rota']['fim']; ?></td>
	</tr>
<?php endforeach;?>
</table>