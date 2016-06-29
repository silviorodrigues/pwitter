<?php
	defined('BASEPATH') OR exit('No direct scrpit access alowed');

	class Timeline extends CI_Controller {

		public function createPweet() {

			session_start();

			if(!isset($_SESSION['username']))
				redirect('main/index');

			$this->user->findByUsername($_SESSION['username']);

			$this->pweet->setUserId($this->user->getId());
			$this->pweet->setContent($this->input->post('content'));

			$this->pweet->save();

			redirect('profile');
		}

	}