<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klien_model extends CI_Model {

	public function get_jumlah_klien()
	{
		$sql = "SELECT count(id_users) as id_users FROM users";
		$result = $this->db->query($sql);
		return $result->row()->id_users;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_klien($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function ambil_id_klien($id)
	{
		$result = $this->db->where('id_users',$id)->get('users');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}