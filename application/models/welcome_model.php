<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	public function subscribe($email) {
		$this->db->insert('subscribers', $email);
	}

	public function email($data) {
		$this->db->insert('messages', $data);
	}
}
