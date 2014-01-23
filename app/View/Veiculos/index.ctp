<h1>Veículos</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Nome</th>
		<th>Endereço</th>
	</tr>
	<?php foreach ($veiculo as $veiculos): ?>
	<tr>
		<td><?php echo $veiculos['Veiculo']['id']; ?></td>
		<td><?php echo $this->Html->link($veiculos['Veiculo']['nome'],array('controller'=> 'veiculos', 'action'=> 'view', $veiculos['Veiculo']['id'])); ?></td>
		<td><?php echo $veiculos['Veiculo']['endereco']; ?></td>
		
	</tr>
<?php endforeach;?>

</table>