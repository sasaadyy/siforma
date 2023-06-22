<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		cek_login();
	}

	public function index()
	{
		if ($this->cart->total_items() <= 0) {
			$this->session->set_flashdata('pesan', '
				<div style="color: red;" class="alert alert-danger alert-dismissible fade show" role="alert">
				Silahkan Belanja  <strong>Dulu!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('dashboard');
		}
		$data['order'] = $this->cart->contents();
		$data['title'] = 'Booking | Siforma';
		$this->load->view('templates_home/header', $data);
		$this->load->view('home/cart');
		$this->load->view('templates_home/footer');
	}

	public function update_cart()
	{


		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid' => $items['rowid'],
				'qty'   => $this->input->post($i . '[qty]')
			);
			$update = $this->cart->update($data);
			$i++;
		}


		redirect('home/cart');
	}



	public function tambah_cart($id)
	{
		$paket = $this->paket_model->find($id);

		$data = array(
			'id' => $paket->id_paket,
			'id_makam' => $paket->id_makam,
			'qty' => 1,
			'price' => $paket->harga,
			'name' => $paket->nama_paket,
			'image' => $paket->foto
		);
		$this->cart->insert($data);

		redirect('home/cart');
	}

	function remove($rowid)
	{
		$data = array(
			'rowid' => $rowid,
			'qty' => 0
		);

		$this->cart->update($data);

		redirect('home/cart');
	}
}

/* End of file Cart.php */
/* Location: ./application/controllers/home/Cart.php */