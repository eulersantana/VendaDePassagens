<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php //echo $this->Html->charset(); ?>
	<title>
	    <?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('heroic-features');
		
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->script('jquery');
		echo $this->Html->script('jquery.maskedinput');	
		echo $this->Html->script('mascara');

	?>
</head>
<body>
		<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar">eiler</span>
	                    <span class="icon-bar">eulerulerul</span>
	                    <span class="icon-bar">12111</span>
	                </button>
	                <a class="navbar-brand" href="index.php">BuyPass</a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-ex1-collapse">
	                <ul class="nav navbar-nav">
	                    <li><a href="#about">About</a>
	                    </li>
	                    <li><a href="#services">Services</a>
	                    </li>
	                    <li><a href="#contact">Contact</a>
	                    </li>

	                </ul>
	            </div>
	            
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
	    </nav>
	<div class="container">
		  <div class="jumbotron hero-spacer">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<hr>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	
	<?php //echo $this->element('sql_dump'); 
	echo $this->Html->script('jquery-1.10.2');
	echo $this->Html->script('bootstrap.js');?>
</body>
</html>
