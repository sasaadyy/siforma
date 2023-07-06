<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_model extends CI_Model {

	public function get_jumlah_paket()
	{
		$sql = "SELECT count(id_paket) as id_paket FROM paket";
		$result = $this->db->query($sql);
		return $result->row()->id_paket;
	}

	public function find($id)
	{
		$result = $this->db->where('id_paket',$id)
							->limit(1)
							->get('paket');
		if( $result->num_rows() > 20 ){
			return $result->row();
		}else{
			return array();
		}

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



	public function insert_paket($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function ambil_id_paket($id)
	{
		$result = $this->db->where('id_paket',$id)->get('paket');
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


	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('paket');
		$this->db->join('makam','.id_makam = paket.id_makam');
		$this->db->like('nama_paket',$keyword);
		$this->db->or_like('harga',$keyword);
		$this->db->or_like('nama_makam',$keyword);
		$this->db->or_like('deskripsi',$keyword);
		return $this->db->get()->result();
	}


}
 
/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */
