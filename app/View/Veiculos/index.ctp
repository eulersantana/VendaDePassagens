<div class="paging">
	<ul class="nav nav-pills">
	  <li><?php echo $this->Html->link(__('Novo Veiculo'), array('action' => 'add')); ?></li>
	</ul>
</div>
<div class="panel panel-default">
	<div class="panel-heading"><?php echo __('Veiculos');?></div>
	<div class="panel-body"></div>
	<table class="table">
		<tr>
			<th>Tipo</th>
			<th>Poltronas Livres</th>
			<th>Poltronas Ocupadas</th>
			<th>Código da rota</th>
			<th class="actions">Ações</th>
		</tr>
	</table>
</div>