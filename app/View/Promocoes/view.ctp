
<h2><?php  echo __('Promoção');?></h2>

<p><b>Id: </b><?php echo h($promocao['Promocao']['id']); ?>&nbsp;</p>

<p><b>Descrição: </b><?php echo h($promocao['Promocao']['descricao']); ?>
			&nbsp;</small></p>

<p><b>Rota:</b>  <?php echo $promocao['Rota']['inicio'].' - '.$promocao['Rota']['fim'].' - '.$promocao['Rota']['data_hora']; ?>
			&nbsp;</p>

