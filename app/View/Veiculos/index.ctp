<h1>Veículos</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Tipo</th>
		<th>Poltronas Livres</th>
		<th>Poltronas Ocupadas</th>
		<th>Rota associada</th>
	</tr>
	<?php foreach ($veiculo as $veiculos): ?>
	<tr>
		<td><?php echo $veiculos['Veiculo']['id']; ?></td>
		<td><?php echo $this->Html->link($veiculos['Veiculo']['tipo'],array('controller'=> 'veiculos', 'action'=> 'view', $veiculos['Veiculo']['id'])); ?></td>
		<td><?php echo $veiculos['Veiculo']['poltronas_livre']; ?></td>
		<td><?php echo $veiculos['Veiculo']['poltronas_ocupadas']; ?></td>
		<td><?php echo $veiculos['Veiculo']['rotas_id']; ?></td>
		<td><?php echo $veiculos['Rota']['id']; ?></td>

	</tr>
<?php endforeach;?>

</table>