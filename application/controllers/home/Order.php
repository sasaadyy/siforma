<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
    }

	public function index()
	{
		$id = $this->session->userdata('id_users');
		$data['users'] = $this->db->query("SELECT * FROM users WHERE users.id_users='$id'")->result();
		// var_dump($data['users']);die;
		$data['title'] = 'Booking | Siforma';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/order');
		$this->load->view('templates_home/footer');		
	}

	public function order_detail($id)
	{
		$data['detail'] = $this->db->query("SELECT * FROM transaksi t, users u, makam r, paket f WHERE t.id_users=u.id_users AND t.id_makam=r.id_makam AND t.id_paket=f.id_paket AND id_transaksi='$id'")->result();
		$data['title'] = 'Detail Booking | Siforma';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/order_detail');
		$this->load->view('templates_home/footer');	
	}

	public function print_order($id)
	{
		$data['detail'] = $this->db->query("SELECT * FROM transaksi t, users u, makam r, paket f WHERE t.id_users=u.id_users AND t.id_makam=r.id_makam AND t.id_paket=f.id_paket AND id_transaksi='$id'")->result();
		$data['title'] = 'Detail Booking | Siforma';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('home/print_order');
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/home/Transaksi.php */