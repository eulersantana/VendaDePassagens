<h1>Passagens</h1>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><?php echo __('Passagens');?></div>
  <div class="panel-body">
    <!-- <p>...</p> -->
  </div>
	<table class="table">
	<tr>
		<th>Id</th>
		<th>Cliente</th>
		<th>Rota</th>
		<th>Poltrona</th>
		<th>Ações</th>
	</tr>
	<?php
	$i = 0;
	foreach ($passagens as $passagem): ?>
		<tr>
			<td><?php echo h($passagem['Passagem']['id']);?>&nbsp;</td>
			<td><?php echo $passagem['Passagem']['cliente'];?>&nbsp;</td>
			<td><?php echo $passagem['Rota']['trajeto'];?>&nbsp;</td>
			<td><?php echo $passagem['Passagem']['poltrona'];?>&nbsp;</td>
			<td class="actions">
			<?php echo $this->Html->link(__('Mudar Poltrona'),array('action' => 'mudar_poltrona', $passagem['Passagem']['id'])); 
			?>
			</td>
		</tr>	
	<?php endforeach;?>
</table>
</div>
