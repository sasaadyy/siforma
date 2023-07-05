<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makam_model extends CI_Model {


	public function get_jumlah_makam()
	{
		$sql = "SELECT count(id_makam) as id_makam FROM makam";
		$result = $this->db->query($sql);
		return $result->row()->id_makam;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function update_password($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function insert_makam($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function ambil_id_makam($id)
	{
		$result = $this->db->where('id_makam',$id)->get('makam');
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
 
/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */