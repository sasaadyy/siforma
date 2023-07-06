<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {
    public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}