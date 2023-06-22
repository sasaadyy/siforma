<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_makam extends CI_Controller {

	public function index()
	{
		$data['makam'] = $this->makam_model->tampil_data('makam')->result();
		$data['paket'] = $this->db->query("SELECT * FROM paket f, makam r WHERE f.id_makam=r.id_makam ORDER BY id_paket DESC")->result();
		$data['title'] = 'Booking | Siforma';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/paket_makam');
		$this->load->view('templates_home/footer');
	}

}

/* End of file Shop.php */
/* Location: ./application/controllers/home/Shop.php */