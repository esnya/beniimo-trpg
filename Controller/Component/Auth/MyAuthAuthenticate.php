<?php
	App::uses('BaseAuthenticate', 'Controller/Component/Auth');

	class MyAuthAuthenticate extends BaseAuthenticate {
		public function authenticate(CakeRequest $request, CakeResponse $response) {
			return true;
		}
		public function getUser(CakeRequest $request) {
			$auth = Hash::get($_SERVER, 'PHP_AUTH_DIGEST');
			if ($auth) {
				$match = preg_match('/username="([^"]+)"/', $auth, $matches);

				if (count($matches) == 2) return ['id' => $matches[1]];
			} 
			return false;
		}
	}
