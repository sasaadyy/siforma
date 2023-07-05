<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makam extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['title'] = "Data Makam | Siforma";
		$data['makam'] = $this->db->query("SELECT * FROM makam r ORDER BY id_makam DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/makam');
		$this->load->view('templates_admin/footer');
	}

	public function makam_grid()
	{
		$data['title'] = "Data Makam Grid | Siforma";
		$data['makam'] = $this->db->query("SELECT * FROM makam r ORDER BY id_makam DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/makam_grid');
		$this->load->view('templates_admin/footer');
	}

	public function menu_makam($id)
	{
		$data['title'] = "Update Makam | Siforma";
		$data['detail'] = $this->db->query("SELECT * FROM makam r, paket m WHERE r.id_makam=m.id_makam AND r.id_makam='$id'")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/menu_makam');
		$this->load->view('templates_admin/footer');
	}

	public function edit_makam($id)
	{
		$data['title'] = "Update Makam | Siforma";
		$data['res_kategori'] = $this->reskategori_model->tampil_data('res_kategori')->result();
		$data['detail'] = $this->db->query("SELECT * FROM makam r WHERE r.id_makam='$id' ORDER BY id_makam DESC")->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/topbar');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/update_makam');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_makam()
	{
		$nama_makam 		= htmlspecialchars($this->input->post('nama_makam'));
		$jml_makam 			= htmlspecialchars($this->input->post('jml_makam'));
		$gambar 			= $_FILES['gambar']['name'];

		if($gambar){
			$config ['upload_path'] = './assets/uploads/makam';
			$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('gambar') ){
				$gambar = $this->upload->data('file_name');
				$this->db->set('gambar',$gambar);
			}else{
				echo "Photo Makam Gagal Diupload!";

			}
		}

		$data = array(
			'nama_makam' 	=> $nama_makam,
			'jml_makam' 	=> $jml_makam,
			'gambar' 		=> $gambar
		);

		$this->makam_model->insert_makam($data,'makam');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible solid fade show alert-alt shadow" role="alert">
			<svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
			Data Makam Berhasil di <strong>Tambahkan!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('admin/makam');



}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */