<?php
	class User extends CI_Model {
		private $id;
		private $username;
		private $password;
		private $email;
		private $about;

		public function getId() {
		    return $this->id;
		}
		
		public function setId($id) {
		    return $this->id = $id;
		}

		public function getUsername() {
		    return $this->username;
		}
		
		public function setUsername($username) {
		    return $this->username = $username;
		}

		public function getPassword() {
		    return $this->password;
		}
		
		public function setPassword($password) {
		    return $this->password = md5($password);
		}

		public function getEmail() {
		    return $this->email;
		}
		
		public function setEmail($email) {
		    return $this->email = $email;
		}

		public function getAbout() {
		    return $this->about;
		}
		
		public function setAbout($about) {
		    return $this->about = $about;
		}

		public function __construct() {
			parent::__construct();
		}

		public function findByUsername($username) {
			$this->db->where('username', $username);
			$result = $this->db->get('user');
			$result = $result->row();

			$this->setId($result->id);
			$this->setUsername($result->username);
			$this->setPassword($result->password);
			$this->setEmail($result->email);
			$this->setAbout($result->about);
		}

		public function create() {
			$data = array(
				'username' => $this->getUsername(),
				'password' => $this->getPassword(),
				'email' => $this->getEmail(),
				'about' => $this->getAbout()
			);

			$this->db->insert('user', $data);
		}

		public function canLogin($username, $password) {
			$this->db->where('username', $username);
			$this->db->where('password', md5($password));

			$result = $this->db->count_all_results('user');

			if($result>0)
				return true;
			return false;
		}
	}