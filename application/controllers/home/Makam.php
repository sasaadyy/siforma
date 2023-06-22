<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makam extends CI_Controller {

	public function index()
	{
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['makam'] = $this->db->query("SELECT * FROM makam r ORDER BY id_makam DESC")->result();
		// $data['paket'] = $this->db->query("SELECT * FROM paket f, restoran r WHERE f.id_restoran=r.id_restoran ORDER BY id_paket DESC")->result();
		$data['title'] = 'Makam | Siforma';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/makam');
		$this->load->view('templates_home/footer');
	}

	public function menu_makam($id)
	{
		$data['title'] = "Makam | Siforma";
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['makam'] = $this->makam_model->tampil_data('makam')->result();
		$data['detail'] = $this->db->query("SELECT * FROM makam r, paket m WHERE r.id_makam=m.id_makam AND r.id_makam='$id'")->result();
		$data['title'] = 'Makam | Siforma';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/menu_makam');
		$this->load->view('templates_home/footer');
	}

	public function kategori_makam($id)
	{
		$data['title'] = "Makam | Siforma";
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['makam'] = $this->db->query("SELECT * FROM makam r, res_kategori rk WHERE r.id_kategori=rk.id_kategori AND rk.id_kategori='$id'")->result();
		$data['title'] = 'Makam | Siforma';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/makam');
		$this->load->view('templates_home/footer');
	}

}

/* End of file Makam.php */
/* Location: ./application/controllers/home/Makam.php */