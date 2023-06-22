<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['makam'] = $this->db->query("SELECT * FROM makam r ORDER BY id_makam DESC")->result();
		$data['paket'] = $this->paket_model->tampil_data('paket')->result();
		$data['jumlah_users'] = $this->users_model->get_jumlah_users();
		$data['jumlah_paket'] = $this->paket_model->get_jumlah_paket();
		$data['jumlah_makam'] = $this->makam_model->get_jumlah_makam();
		$data['jumlah_transaksi'] = $this->transaksi_model->get_jumlah_transaksi();
		$data['jumlah_status'] = $this->transaksi_model->get_jumlah_status();
		$data['jumlah_kategori'] = $this->reskategori_model->get_jumlah_kategori();
		$data['pendapatan'] = $this->transaksi_model->pendapatan();
		$data['jumlah_contact'] = $this->db->query("SELECT count(id_contact) as id_contact FROM contact")->row()->id_contact;

		$data['title'] = "Dashboard | Siforma";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/footer');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */