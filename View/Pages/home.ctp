<style>
	body {
			padding-top: 50px;
	}
</style>
<div class="jumbotron">
	<div class="container">
		総合TRPG支援システム
		<h1>紅芋TRPG</h1>
	</div>
</div>
<div class="container">
	<div class="alert alert-danger">
		このシステムは現在開発中（α版）です。
	</div>
	<div class="alert alert-info">
		<a class="alert-link" href="http://takiri.shy.jp/trpg/DodontoF/public_html/DodontoF/DodontoF.swf" target="_blank">どどんとふ</a>もあります。
	</div>
	<div class="row">
		<div class="col-sm-6 col-md-4">
			<h2>ソード・ワールド2.0</h2>
			<p>みんな大好きSW2.0！紅芋SW2から移植中です。</p>
			<p>※ソード・ワールド2.0の著作権はグループＳＮＥに帰属します。</p>
			<ul>
				<li><?php echo $this->Html->link(__('Characters'), array('plugin' => 'sword_world2', 'controller' => 'characters', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Campaigns'), array('plugin' => 'sword_world2', 'controller' => 'campaigns', 'action' => 'index')); ?></li>
			</ul>
		</div>
		<div class="col-sm-6 col-md-4">
			<h2>艦これRPG</h2>
			<p>絶賛開発中。プレイしながら改善していきましょう。</p>
			<p>※艦これRPGの著作権は関係各所に帰属します。</p>
			<ul>
				<li><?php echo $this->Html->link(__('Characters'), array('plugin' => 'kancolle', 'controller' => 'characters', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Naval Districts'), array('plugin' => 'kancolle', 'controller' => 'naval_districts', 'action' => 'index')); ?></li>
			</ul>
		</div>
	</div>
</div>
