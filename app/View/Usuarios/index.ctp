<h1>Usuarios</h1>
<table>
	<tr>
		<th>Id </th>
		<th>Nome</th>
		<th>Endereco</th>
	</tr>
	<?php foreach ($usuario as $usuarios): ?>
	<tr>
		<td><?php echo $usuarios['Usuario']['id'] ?></td>
		<td><?php echo $this->Html->link($usuarios['Usuario']['nome'],array('controller'=> 'usuarios', 'action'=> 'view', $usuarios['Usuario']['id'])); ?></td>
		<td><?php echo $usuarios['Usuario']['endereco']; ?></td>
		
	</tr>
<?php endforeach;?>


</table>