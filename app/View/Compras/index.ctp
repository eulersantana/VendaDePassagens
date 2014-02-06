<h2>Compras realizadas</h2>
<?php
	//print_r($compras);
	print_r($compras);
	echo "<br />";
	echo "<br />";
	echo "<br />";
	//print_r($this->Session->read('Auth.User.Compra.user_id'));
	//print_r($this->Auth->user ( 'username' ));
?>
<table class="table">
	<tr>
		<th><?php echo $this->Paginator->sort('Id da passagem');?></th>
		<th><?php echo $this->Paginator->sort('Id da rota');?></th>
	</tr>
	<?php foreach ($compras as $compra) { ?>
	<tr>
		<?php if(isset($compra['Compra']['user_id']) && $compra['Compra']['user_id'] == $this->Session->read('Auth.User.id')){ ?>
			<td><?echo $compra['Passagem']['id'];?></td>

			<td><?php echo $this->Html->link($compra['Passagem']['rota_id'], array('action' => 'view_rota', $compra['Passagem']['rota_id']));?></td>
	</tr>
		<?php } ?>
	<?php } ?>
</table>
