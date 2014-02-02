
<?php $this->start('botao');?>
 <h1>BuyPass</h1>
        <p style="text-align:justify;">Comprar suas passagens intermunicipais agora ficou muito mais fácil! Com o BuyPass você vai poder comprar sem sair de casa e ainda acumular pontos para trocar por mais passagens!</p>
<?php echo $this->Html->link('Cadastre-se já','../clientes/add',array('class'=>'btn btn-primary btn-lg','role'=>'button')); ?>
<?php $this->end(); ?>