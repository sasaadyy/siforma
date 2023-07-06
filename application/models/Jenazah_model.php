<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD:application/models/ResKategori_model.php
defined('BASEPATH') or exit('No direct script access allowed');
=======
>>>>>>> 87f29114f3c2c4ce928dd20fbcb1b05199d17ba8
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenazah_model extends CI_Model {

	public function get_jumlah_jenazah()
	{
		$sql = "SELECT count(id_transaksi) as id_transaksi FROM transaksi";
		$result = $this->db->query($sql);
		return $result->row()->id_transaksi;
	}
<<<<<<< HEAD

=======
>>>>>>> 1bf8276e591dc8a104b57c9b56f974b9a2237217:application/models/Jenazah_model.php

class ResKategori_model extends CI_Model
{
>>>>>>> 87f29114f3c2c4ce928dd20fbcb1b05199d17ba8

	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

<<<<<<< HEAD
	public function update_password($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
=======
	public function update_password($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
>>>>>>> 87f29114f3c2c4ce928dd20fbcb1b05199d17ba8
	}



<<<<<<< HEAD
	public function insert_jenazah($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function ambil_id_jenazah($id)
	{
		$result = $this->db->where('id_transaksi',$id)->get('transaksi');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 

	public function hapus_data($where,$table)
=======
<<<<<<< HEAD:application/models/ResKategori_model.php
	public function insert_kategori($data, $table)
=======
	public function insert_jenazah($data,$table)
>>>>>>> 1bf8276e591dc8a104b57c9b56f974b9a2237217:application/models/Jenazah_model.php
	{
		$this->db->insert($table, $data);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function ambil_id_jenazah($id)
	{
<<<<<<< HEAD:application/models/ResKategori_model.php
		$result = $this->db->where('id_kategori', $id)->get('res_kategori');
		if ($result->num_rows() > 0) {
=======
		$result = $this->db->where('id_transaksi',$id)->get('transaksi');
		if($result->num_rows() > 0){
>>>>>>> 1bf8276e591dc8a104b57c9b56f974b9a2237217:application/models/Jenazah_model.php
			return $result->result();
		} else {
			return false;
		}
	}

	public function hapus_data($where, $table)
>>>>>>> 87f29114f3c2c4ce928dd20fbcb1b05199d17ba8
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
<<<<<<< HEAD




=======
>>>>>>> 87f29114f3c2c4ce928dd20fbcb1b05199d17ba8
}
 
/* End of file Type_model.php */
/* Location: ./application/models/Type_model.php */