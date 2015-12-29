<style>
	body { padding-top: 50px; }
</style>

<div class="jumbotron">
	<div class="container">
		<h1><?php echo $user['User']['name']; ?></h1>
	</div>
</div>

<div class="container">
	<h2><?php echo __('Sword World 2.0 Characters'); ?></h2>
	<table class="table">
		<tbody>
			<?php foreach ($sw2 as $character) : ?>
			<tr>
				<td>
					<?php 
						echo $this->Html->link(
							__('View'),
							array('plugin' => 'sword_world2', 'controller' => 'characters', 'action' => 'view', $character['Character']['id']),
							array('class' => 'btn btn-primary btn-xs', 'role' => 'button')
						); 
					?>
				</td>
				<td><?php echo h($character['Character']['name']); ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<h2><?php echo __('Kancolle Characters'); ?></h2>
	<table class="table">
		<tbody>
			<?php foreach ($kancolle as $character) : ?>
			<tr>
				<td>
					<?php 
						echo $this->Html->link(
							__('View'),
							array('plugin' => 'sword_world2', 'controller' => 'characters', 'action' => 'view', $character['Character']['id']),
							array('class' => 'btn btn-primary btn-xs', 'role' => 'button')
						); 
					?>
				</td>
				<td><?php echo h($character['Character']['name']); ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
