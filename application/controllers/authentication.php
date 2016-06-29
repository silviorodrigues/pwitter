<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Authentication extends CI_Controller {
		public function login() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$result = $this->user->canLogin($username, $password);

			if($result) {
				session_start();
				$_SESSION['username'] = $username;
				redirect('profile/');
			} else {
				redirect('main/index');
			}
		}

		public function logout() {
			session_start();
			session_unset();
			redirect('main/index');
		}
	}