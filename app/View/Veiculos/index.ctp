<h1>Veículos</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Tipo</th>
		<th>Poltronas Livres</th>
		<th>Poltronas Ocupadas</th>
		<th>Rota associada</th>
		<th>Ação</th>
	</tr>
	<?php foreach ($veiculo as $veiculos): ?>
	<tr>
		<td><?php echo $veiculos['Veiculo']['id']; ?></td>
		<td><?php echo $this->Html->link($veiculos['Veiculo']['tipo'],array('controller'=> 'veiculos', 'action'=> 'view', $veiculos['Veiculo']['id'])); ?></td>
		<td><?php echo $veiculos['Veiculo']['poltronas_livre']; ?></td>
		<td><?php echo $veiculos['Veiculo']['poltronas_ocupadas']; ?></td>
		<td><?php echo $veiculos['Rota']['inicio'].' - '.$veiculos['Rota']['fim'].' - '.$veiculos['Rota']['data_hora']; ?></td>
		<td>
			<?php 
				echo $this->Form->postLink(
		        'Delete',
		        array('action' => 'delete', $veiculos['Veiculo']['id']),
		        array('confirm' => 'Você tem certeza ?'));
			?>
		</td>



	</tr>
<?php endforeach;?>

</table>