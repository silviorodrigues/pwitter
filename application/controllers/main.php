<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Main extends CI_Controller {
		public function index() {
			$this->load->view('layout/_header');
			$this->load->view('main/index');
			$this->load->view('layout/_footer');
		}
	}
?>