<h2>Compras realizadas</h2>
<?php
	//print_r($compras);
	// pr($compras);
	echo "<br />";
	echo "<br />";
	echo "<br />";
	//print_r($this->Session->read('Auth.User.Compra.user_id'));
	//print_r($this->Auth->user ( 'username' ));
?>
<table class="table">
	
	<tr>
		<th><?php echo $this->Paginator->sort('Trajeto - Data e Hora');?></th>
		<th><?php echo $this->Paginator->sort('Valor');?></th>	
		<th><?php echo $this->Paginator->sort('Forma de pagamento');?></th>
		<th><?php echo $this->Paginator->sort('Tipo de pagamento');?></th>		
		<th><?php echo $this->Paginator->sort('Veiculo');?></th>
		<th><?php echo $this->Paginator->sort('Status');?></th>
		<th><?php echo $this->Paginator->sort('Segunda Via');?></th>
		
	</tr>
	<?php foreach ($compras as $compra ) { ?>
	<tr>
		<?php if(isset($compra['Compra']['user_id']) && $compra['Compra']['user_id'] == $this->Session->read('Auth.User.id')){ ?>
			<td><?php echo $compra['Rota']['trajeto'];?></td>

			<td><?php echo $compra['Pagamento']['valor_parcelas'];?></td>
			<td><?php echo $compra['Pagamento']['tipo'];?></td>
			<td><?php 	if($compra['Pagamento']['parcelas'] == 0){
							echo "Avista";
						}else{
							echo $compra['Pagamento']['parcelas']." X ".$compra['Pagamento']['valor_parcelas'];
						}
						?></td>
			<td><?php echo $compra['Veiculo']['tipo'];?></td>
			<td><?php if($compra['Pagamento']['status'] == 1){
				echo "<span class='glyphicon glyphicon-ok'></span><b> Pago</b>";
			}else{
				echo "<span class='glyphicon glyphicon-remove'>Apagar</span>";
			};?></td>
                        <td class="actions">
			<td><?php echo '<span class="glyphicon glyphicon-print">'.'  '. $this->Html->link('Imprimi',array('action'=>'geraPDF',$compra['Passagem']['id'])).'</span>';?></td>

	</tr>
		<?php } ?>
	<?php } ?>
</table>
