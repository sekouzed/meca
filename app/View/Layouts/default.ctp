<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('../font-awesome/css/font-awesome.min.css');
		echo $this->Html->css('./select2/select2.css');
		echo $this->Html->css('cake.generic');
        echo $this->Html->css('nav-blocks.css');
        echo $this->Html->css('menu.css');

        echo $this->Html->script('jquery') ;
        echo $this->Html->script('./select2/select2') ;
        echo $this->Html->script('script') ;

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <div class="container">
        <div id="header">
        <h1>NUM MECA-OUTIL</h1>

        <?php

        if(AuthComponent::user('id')){

            switch($this->Session->read('Auth.User.role')){
                case 'admin':
                    echo $this->Element('admin_menu');break;
                case 'storekeeper':
                    echo $this->Element('storekeeper_menu');break;
                case 'issuer':
                    echo $this->Element('issuer_menu');break;
                default:
                    echo $this->Element('menu');break;
            }

        }else{
            echo $this->Element('menu');
        }
        ?>
        <div class="bottom-10"></div>
    </div>
    </div>
	<div class="container">
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
            <?= date('Y') ?> © NUM MECANIQUE
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>

</body>
</html>
