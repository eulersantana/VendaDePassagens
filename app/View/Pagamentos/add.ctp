
<div class="row">
	<div class="col-lg-12">
		<h3>Adicionar Pagamento</h3>
		<?php
			echo $this->Form->create('Pagamento');
			echo "<div class='input-group'>";
						echo $this->Form->input('',array('class'=>'form-control','type'=>'text'));
			echo "<span class='input-group-addon'>.00</span>".
					"</div>";
			echo $this->Form->input('parcela');
			echo $this->Form->input('status');
			echo $this->Form->input('valor_parcelas');
			echo $this->Form->input('passagem_id',array('label' => 'Comprador'));
			echo $this->Form->end('Salvar');
		?>
	</div>
</div>

