<?php

class home_model extends CI_Model {

	function getAll() {
		$q = $this->db->query("SELECT * FROM users");
		if($q->num_rows() > 0) {
			foreach($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

}