<?php
	class User extends AppModel {
		public $hasMany = [
		'SwordWorld2Character' => [
		'className' => 'SwordWorld2.Character',
		'foreignKey' => 'user_id',
		],
		'KancolleCharacter' => [
		'className' => 'Kancolle.Character',
		'foreignKey' => 'user_id',
		],
		];

		// Deprecated
		static public function getLoginId() {
			if (array_key_exists('PHP_AUTH_DIGEST', $_SERVER)) {
				$auth = $_SERVER['PHP_AUTH_DIGEST'];
				$match = preg_match('/username="([^"]+)"/', $auth, $matches);

				if (count($matches) == 2) return $matches[1];
			}
			return null;
		}
	}
