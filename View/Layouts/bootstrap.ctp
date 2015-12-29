<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	<?php echo $this->Html->css('bootstrap.min'); ?>
	<style>
	body {
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	}
	footer {
		margin-top: 40px;
	}
	</style>
	<?php echo $this->Html->css('bootstrap-theme.min'); ?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<!--
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
	-->
	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');
	?>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"><?php echo __('Toggle navigation'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php echo $this->Html->link(__('Beniimo TRPG'), '/', array('class' => 'navbar-brand')); ?>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown">
				<a class="dropdown-toggle" href="#" data-toggle="dropdown">
					<?php echo __('Sword World 2.0'); ?>
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Characters'), array('plugin' => 'sword_world2', 'controller' => 'characters', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Campaigns'), array('plugin' => 'sword_world2', 'controller' => 'campaigns', 'action' => 'index')); ?></li>
				</ul>
				</li>
				<li>
				<a class="dropdown-toggle" href="#" data-toggle="dropdown">
					<?php echo __('Kancolle'); ?>
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Characters'), array('plugin' => 'kancolle', 'controller' => 'characters', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Naval Districts'), array('plugin' => 'kancolle', 'controller' => 'naval_districts', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Index'), array('plugin' => 'kancolle', 'controller' => 'indexes', 'action' => 'index')); ?></li>
				</ul>
				</li>
				<li><?php echo $this->Html->link(__('Chat'), array('plugin' => 'chat', 'controller' => 'chats', 'action' => 'chat'), array('target' => '_blank')); ?></li>
			</ul>
		</div>
	</div>
	</nav>

	<?php echo $this->fetch('content'); ?>


	<footer class="small text-center">
	<div class="copyright">
		<?php if (isset($copyright)): ?>
		<?php echo $copyright; ?>
		<?php else: ?>
		Copyright &copy; 2014 ukatama. All Rights Reserved
		<?php endif; ?>
		<?php //echo $this->fetch('copyright', 'Copyright &copy; 2014 GROUP SNE, ukatama. All Rights Reserved'); ?>
	</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->fetch('script'); ?>

</body>
</html>
