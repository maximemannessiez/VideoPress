<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Administration - VideoPress
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.css');

		echo $this->Html->script('jquery.js');
		echo $this->Html->script('cakestrap.js');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div style="position:relative" class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="#">Administration VideoPress</a>
	    		<ul class="nav">
	      			<li class="active"><a href="/">Retour au site</a></li>
	      			<li><a href="<?php echo Router::url(array('controller'=>'videos','action'=>'index')); ?>">Vidéos</a></li>
	    		</ul>	
			</div>
  		</div
>	</div>
	<div class="container">
		<hr>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
		<?php echo $this->element('sql_dump'); ?>
	</div>
</body>
</html>
