<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Profile extends CI_Controller {
		public function index() {
			session_start();

			if(!isset($_SESSION['username']))
				redirect('main/index');

			$this->user->findByUsername($_SESSION['username']);

			$result = $this->pweet->getFromUser($this->user->getId());
			$data['result'] = $result;

			$this->load->view('layout/_header');
			$this->load->view('profile/index', $data);
			$this->load->view('layout/_footer');
		}

		public function view($username) {
			session_start();

			if(!isset($_SESSION['username']))
				redirect('main/index');

			$data = $this->user->findByUsername($username);

			$this->load->view('layout/_header');
			$this->load->view('profile/view', $data);
			$this->load->view('layout/_footer');
		}

		public function create() {
			$this->load->view('layout/_header');
			$this->load->view('profile/create');
			$this->load->view('layout/_footer');	
		}

		public function createNow() {
			$this->user->setName($this->input->post('name'));
			$this->user->setUsername($this->input->post('username'));
			$this->user->setPassword($this->input->post('password'));
			$this->user->setEmail($this->input->post('email'));
			$this->user->setAbout($this->input->post('about'));

			$this->user->create();

			redirect('profile/view/'.$this->user->getUsername());
		}

		public function update() {
			session_start();

			if(!isset($_SESSION['username']))
				redirect('main/index');

			$this->user->findByUsername($_SESSION['username']);

			$this->load->view('layout/_header');
			$this->load->view('profile/update');
			$this->load->view('layout/_footer');	
		}

		public function updateNow() {
			session_start();

			if(!isset($_SESSION['username']))
				redirect('main/index');

			$this->user->findByUsername($_SESSION['username']);

			$this->user->setName($this->input->post('name'));
			$this->user->setUsername($this->input->post('username'));
			$this->user->setPassword($this->input->post('password'));
			$this->user->setEmail($this->input->post('email'));
			$this->user->setAbout($this->input->post('about'));

			$this->user->update();

			$_SESSION['username'] = $this->input->post('username');

			redirect('profile/view/'.$this->user->getUsername());
		}
	}