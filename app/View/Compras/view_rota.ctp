

<?php
	if($rotas != null){
	
?>
<div class="row">
		<h2>Rota</h2>
		<p><b>Id: </b><?php echo $rotas['Rota']['id']?></p>

		<p><b>Valor: </b><?php echo $rotas['Rota']['valor']?></p>

		<p><b>Nome: </b><?php echo $rotas['Rota']['inicio']?></small></p>

		<p><b>Bairo:</b> <?php echo $rotas['Rota']['fim']?></p>

		<p><b>Data e Hora:</b> <?php echo $rotas['Rota']['data_hora']?></p>
</div>
<?php } else { ?>
	<div class="row">Rota não associada ao cliente !</div>
<?php } ?>

