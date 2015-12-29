<?php
	function myprint($array) {
		echo nl2br(str_replace(' ', '&nbsp;', print_r($array, 1)));
	}
?>
<div class="container">
	<h1>Testings</h1>
	<div>
		<h2>push</h2>
		<?php $a = [null => 'hoge']; ?>
		<p><?php myprint($a); ?></p>
		<?php array_push($a, [1 => 'foo', 2 => 'bar']); ?>
		<p><?php myprint($a); ?></p>
	</div>
	<div>
		<h2>Hash::merge</h2>
		<?php 
			$a = [
			'Hoge' => [
			'foo',
			'bar',
			'boo',
			'Hoge' => 1,
			],
			'Foo' => 'Bar',
			];
			$b = [
			'Hoge' => [
			'foo',
			'foobar',
			'Hoge' => 2,
			],
			'Foo' => [
			'foo',
			'bar'
			],
			];
		?>
		<p>a = <?php myprint($a); ?></p>
		<p>b = <?php myprint($b); ?></p>
		<p>array_merge(a, b) = <?php myprint(array_merge($a, $b)); ?></p>
		<p>array_merge_recursive(a, b) = <?php myprint(array_merge_recursive($a, $b)); ?></p>
		<p>Hash::merge(a, b) = <?php myprint(Hash::merge($a, $b)); ?></p>
		<p>array_merge(b, a) = <?php myprint(array_merge($b, $a)); ?></p>
		<p>array_merge_recursive(b, a) = <?php myprint(array_merge_recursive($b, $a)); ?></p>
		<p>Hash::merge(b, a) = <?php myprint(Hash::merge($b, $a)); ?></p>
	</div>
</div>
