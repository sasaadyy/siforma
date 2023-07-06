<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['makam'] = $this->db->query("SELECT * FROM makam r ORDER BY id_makam DESC")->result();
		$data['paket'] = $this->db->query("SELECT * FROM paket f, makam r WHERE f.id_makam=r.id_makam ORDER BY id_paket DESC")->result();
		$data['title'] = 'Siforma';
		$this->load->view('templates_home/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates_home/footer');
	}
<<<<<<< HEAD
=======
<<<<<<< HEAD

	
=======
>>>>>>> 1bf8276e591dc8a104b57c9b56f974b9a2237217
>>>>>>> 87f29114f3c2c4ce928dd20fbcb1b05199d17ba8
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */