<?php 
	class Follows extends CI_Model {
		private $id;
		private $sourceUser;
		private $targetUser;

		public function getId() {
		    return $this->id;
		}
		
		public function setId($id) {
		    return $this->id = $id;
		}

		public function getSourceUser() {
		    return $this->sourceUser;
		}
		
		public function setSourceUser($id) {
		    return $this->sourceUser = $id;
		}

		public function getTargetUser() {
		    return $this->targetUser;
		}
		
		public function setTargetUser($id) {
		    return $this->targetUser = $id;
		}

		public function __construct() {
			parent::__construct();
		}
	}