<h1>Pagamentos</h1>
<?php
if (!isset($pagamentos)){
  echo '<h3>';
  echo 'Informe um dia ou mês completo';
  echo '</h3>';
}
?>
<table class='table'>
	<tr>
		<th>Id</th>
		<th>Tipo</th>
		<th>Valor</th>
		<th>Parcelas</th>
		<th>Status</th>
		<th>Valor da parcela</th>
		<th>Ações</th>
	</tr>
<?php if (isset($pagamentos)) {
foreach ($pagamentos as $pagamento):
		echo '<tr>';
			echo '<td>'; echo $pagamento['Pagamento']['id']; echo '</td>';
			echo '<td>'; echo $pagamento['Pagamento']['tipo']; echo '</td>';
			echo '<td>'; echo $pagamento['Pagamento']['valor_parcelas'] * ($pagamento['Pagamento']['parcelas'] + 1); echo '</td>';
			echo '<td>'; echo $pagamento['Pagamento']['parcelas'];echo '</td>';
			echo '<td>'; echo $pagamento['Pagamento']['status'];echo '</td>';
			echo '<td>'; echo $pagamento['Pagamento']['valor_parcelas'];echo '</td>';
			echo '<td class="actions">';
				 
					echo $this->Html->link(__('View'), array('action' => 'view', $pagamento['Pagamento']['id'])); 
					echo $this->Html->link('Edit',array('action' => 'edit', $pagamento['Pagamento']['id'])); 
					echo $this->Form->postLink(
			        'Delete',
			        array('action' => 'delete', $pagamento['Pagamento']['id']),
			        array('confirm' => 'Você tem certeza ?'));
		echo '</td>';
	endforeach;
}  ?>

</table>
