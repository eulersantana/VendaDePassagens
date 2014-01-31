
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __(''); ?></legend>
    <?php
    	echo "<div class='clearfix'>";
        	echo $this->Form->input('username',array('class'=>'form-control','label'=>'E-mail'));
        echo "</div>";
        echo "<div class='clearfix'>";
        	echo $this->Form->input('password',array('class'=>'form-control','label'=>'Senha'));
        echo "</div>";
    ?>
    </fieldset>
<?php $options = array(
		'label'=>'Logar',
		'class'=>'form-control'
	); 
	echo "<p>";
	echo $this->Form->end($options);
	echo "</p>";
	?>

