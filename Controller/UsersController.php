<?php
	class UsersController extends AppController {
		public function view($id = null) {
			$this->User->recursive = 0;
			$user = $this->User->findById($id);

			if (!$id) throw new NotFoundException;

			$sw2 = $this->User->SwordWorld2Character->findAllByUserId($id, [
			'Character.id',
			'Character.name',
			]);
			$kancolle = $this->User->KancolleCharacter->findAllByUserId($id, [
			'Character.id',
			'Character.name',
			]);
			$this->set(compact('user', 'sw2', 'kancolle'));
		}
	}
?>
