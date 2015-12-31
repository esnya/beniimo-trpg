<?php
    App::uses('BaseAuthenticate', 'Controller/Component/Auth');
    
    class MyAuthAuthenticate extends BaseAuthenticate {
        public function authenticate(CakeRequest $request, CakeResponse $response) {
            return true;
        }

        public function getUser(CakeRequest $request) {
            $key = Hash::get($_ENV, 'USER_KEY', 'REMOTE_USER');
            if (!$key) {
                $key = 'REMOTE_USER';
            }
    
            $user = env($key);
    
            if ($user) {
                return [ 'id' => $user ];
            } 
    
            return false;
        }
    }
