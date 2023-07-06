<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
        $this->load->helper('date');
    }

	public function index()
	{
		$data['title'] = "Data Pesanan | Siforma";
		$data['booking'] = $this->db->query("SELECT * FROM transaksi t, users u, paket f, makam r WHERE t.id_users=u.id_users AND t.id_paket=f.id_paket AND t.id_makam=r.id_makam ORDER BY id_transaksi DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/booking');
		$this->load->view('templates_admin/footer');
	}

	public function detail_booking($id)
	{
		$data['title'] = "Detail Pesanan | Siforma";
		$data['detail'] =  $this->db->query("SELECT * FROM transaksi t, users u, paket f, makam r WHERE t.id_users=u.id_users AND t.id_paket=f.id_paket AND t.id_makam=r.id_makam AND t.id_transaksi='$id'")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_booking');
		$this->load->view('templates_admin/footer');
	}

	public function edit_booking($id)
	{
		$data['title'] = "Update Pesanan | Siforma";
		$data['detail'] =  $this->db->query("SELECT * FROM transaksi t, users u, paket f, makam r WHERE t.id_users=u.id_users AND t.id_paket=f.id_paket AND t.id_makam=r.id_makam AND t.id_transaksi='$id'")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_booking');
		$this->load->view('templates_admin/footer');
	}




	public function update_booking_aksi()
	{
		$id_transaksi 	= $this->input->post('id_transaksi');
		$status 		= htmlspecialchars($this->input->post('status'));
		$success_date				= date('Y-m-d H:i:s', now());
		$data = array(

			'status' 		=> $status,
			'success_date' 		=> $success_date,

		);

		$where = array('id_transaksi' => $id_transaksi);

		$this->booking_model->update_data($where,$data,'transaksi');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
			Data Booking Berhasil di <strong>Update!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/booking');



		
	}


	public function delete_booking($id)
	{
		$where = array('id_transaksi' => $id);
		$this->booking_model->hapus_data($where,'transaksi');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
			Data Booking Berhasil di <strong>Delete!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/booking');
	}


}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */