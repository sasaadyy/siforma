<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['makam'] = $this->db->query("SELECT * FROM makam r ORDER BY id_makam DESC")->result();
		$data['paket'] = $this->db->query("SELECT * FROM paket f, makam r WHERE f.id_makam=r.id_makam ORDER BY id_paket DESC")->result();
		$data['title'] = 'Siforma';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/index');
		$this->load->view('templates_home/footer');
	}

	public function paket_detail($id)
	{
		$data['detail'] = $this->db->query("SELECT * FROM paket f, makam r WHERE f.id_makam=r.id_makam AND f.id_paket='$id' ORDER BY id_paket DESC")->result();
		$data['title'] = 'Detail Paket | Siforma';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/paket_detail');
		$this->load->view('templates_home/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */