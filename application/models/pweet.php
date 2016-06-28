<?php
	class Pweet extends CI_Model {
		private $id;
		private $userId;
		private $content;
		private $insertDate;

		public function getId() {
		    return $this->id;
		}
		
		public function setId($id) {
		    return $this->id = $id;
		}

		public function getUserId() {
		    return $this->userId;
		}
		
		public function setUserId($userId) {
		    return $this->userId = $userId;
		}

		public function getContent() {
		    return $this->content;
		}
		
		public function setContent($content) {
		    return $this->content = $content;
		}

		public function getInsertDate() {
		    return $this->insertDate;
		}
		
		public function setInsertDate($insertDate) {
		    return $this->insertDate = $insertDate;
		}

		public function __construct() {
			parent::__construct();
		}
	}