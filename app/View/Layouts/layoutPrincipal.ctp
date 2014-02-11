<?php $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="pt">
  <head>

    <title>BuyPass</title>
       <?php //echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $title_for_layout; ?>
    </title>
    <?php
        //echo $this->Html->meta('icon');
         echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('jumbotron');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
      
        echo $this->Html->script('jquery');
        echo $this->Html->script('jquery.maskedinput'); 
        echo $this->Html->script('mascara');
        echo $this->Html->script('jquery.ajaxRotas');
        echo $this->Html->script('Chart');
        
        echo $this->Js->writeBuffer(array("cache"=>TRUE));

    ?>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body >

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php 
            if($this->Session->read('Auth.User.tipo') == "Funcionario"){ ?>
             <?php echo "<a class='navbar-brand' href=".Router::url('/', true).">BuyPass</a>" ?>
             <?php echo "<a class='navbar-brand' href=".Router::url('/', true)."users/index".">Usuários</a>" ?>
             <?php echo "<a class='navbar-brand' href=".Router::url('/', true)."veiculos/index".">Veiculos</a>" ?>
             <?php echo "<a class='navbar-brand' href=".Router::url('/', true)."rotas/index".">Rota</a>" ?>
             <?php echo "<a class='navbar-brand' href=".Router::url('/', true)."promocoes/index".">Promoção</a>" ?>
             <?php echo "<a class='navbar-brand' href=".Router::url('/', true)."users/grafico_diario".">Gráfico</a>" ?>
          <?php }else{ ?>
                      <?php if($this->Session->read('Auth.User.tipo') == "cliente"){ ?>
                                 <?php echo "<a class='navbar-brand' href=".Router::url('/', true).">BuyPass</a>" ?>
                                 <?php echo "<a class='navbar-brand' href=".Router::url('/', true)."clientes/edit/".$this->Session->read('Auth.User.id').">Usuários</a>" ?>
                                 <?php echo "<a class='navbar-brand' href=".Router::url('/', true)."passagens/add".">Comprar</a>" ?>
                                  <?php echo "<a class='navbar-brand' href=".Router::url('/', true)."compras/index".">Historico</a>" ?>
                                 
                      <?php }else{ ?>
                                <?php echo "<a class='navbar-brand' href=".Router::url('/', true).">BuyPass</a>" ?>
                                <?php echo "<a class='navbar-brand' href=".Router::url('/', true)."clientes/edit/".$this->Session->read('Auth.User.id').">Usuários</a>" ?>
                                <?php echo "<a class='navbar-brand' href=".Router::url('/', true)."passagens/add".">Comprar</a>" ?>

                      <?php } ?>

          <?php } ?>
        </div>
        <div class="navbar-collapse collapse">
            
            <?php 

                if(!$this->Session->read('Auth.User.nome')){
                echo $this->Html->link('Entrar','../users/login',array('class'=>'btn btn-primary btn-lg navbar-right','role'=>'button')); 

              }else{
                
                echo $this->Html->link('Sair','../users/logout',array('class'=>'btn btn-primary btn-lg navbar-right','role'=>'button'));
                echo '<button type="button" class="btn btn-default btn-lg navbar-right">
                  <span class="glyphicon glyphicon-circle-arrow-up"></span>'.' <span id="pontos"></span> '.'Pontos
                </button>';
                echo '<button type="button" class="btn btn-default btn-lg navbar-right">
                  <span class="glyphicon glyphicon-user"> </span>'.'<span id="nome">'.$this->Session->read('Auth.User.nome').'</span></button>';
                
              }
                ?>
                
        </div>
        <!--/.navbar-collapse -->
      </div>

    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <p><?php echo $this->Session->flash();?></p>       
        <p><?php echo $this->fetch('botao'); ?></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <?php 
          echo $this->fetch('content'); 
      ?>
      

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php //echo $this->element('sql_dump'); 
    // echo $this->Html->script('bootstrap');
    ?>
  </body>
</html>
