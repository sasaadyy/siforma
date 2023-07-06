<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		cek_login();
		$this->load->helper('date');
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
			redirect('home/paket_makam');
		}

		$data['orders'] = $this->cart->contents();
				
		$data['title'] = 'Checkout | Siforma';
		$this->load->view('templates_home/header', $data);
		$this->load->view('home/transaksi');
		$this->load->view('templates_home/footer');
	}

	public function tambah_order()
	{
		$id_users 	= $this->session->userdata('id_users');
		$alamat_users 	= htmlspecialchars($this->input->post('alamat_users'));

		$data = array(
			'alamat_users' => $alamat_users,

		);
		$where = array(
			'id_users' => $id_users,
		);
		$this->users_model->update_data($where, $data, 'users');

		$order = $this->placeOrder($id_users);

		if ($order) {
			$this->session->set_flashdata('pesan', '
				<div style="" class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('home/order');
		} else {
			$this->session->set_flashdata('pesan', '
				<div style="" class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('home/paket_makam');
		}

		$this->session->set_flashdata('pesan', '
			<div style="" class="alert alert-success alert-dismissible fade show" role="alert">
			Terima Kasih Telah  <strong>Order!</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
			');
		redirect('home/order');
	}

	public function upload()
	{
		$config['upload_path']          = './assets/bukti_tf/';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 2048;


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload("foto")) {
			return "default.jpg";
		} else {
			$data = $this->upload->data();
			return $data['file_name'];
		}
	}

	public function placeOrder($id_users)
	{
		$config['upload_path']          = './assets/uploads/bukti_tf/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']			= 'bukti_tf' . $id_users;

		$this->load->library('upload', $config);

		$this->upload->do_upload('image');
		$image = $this->upload->data();
		$bukti_tf = $image['file_name'];

		$items = $this->cart->contents();
		$i = 0;
		foreach ($items as $item) {
			$orderData[$i]['id_users'] = $id_users;
			$orderData[$i]['id_paket'] = $item['id'];
			$orderData[$i]['id_makam'] = $item['id_makam'];
			$orderData[$i]['nama_paket'] = $item['name'];
			$orderData[$i]['nm_jenazah'] = ($this->input->post('nm_jenazah'));
			$orderData[$i]['tanggal_lahir'] = ($this->input->post('tanggal_lahir'));
			$orderData[$i]['tanggal_wafat'] = ($this->input->post('tanggal_wafat'));
			$orderData[$i]['tanggal_pemakaman'] = ($this->input->post('tanggal_pemakaman'));
			$orderData[$i]['bukti_tf'] = $bukti_tf;
			$orderData[$i]['qty'] = $item['qty'];
			$orderData[$i]['total'] = $item['subtotal'];
			$orderData[$i]['tanggal'] = date('Y-m-d H:i:s', now());
			$orderData[$i]['success_date'] = date('Y-m-d H:i:s', now());
			$i++;
		}


		if (!empty($orderData)) {
			$insertOrder = $this->booking_model->insertOrder($orderData);
			if ($insertOrder) {
				$this->cart->destroy();
				//return order id
				return $insertOrder;
			}
		}
	}
}

<<<<<<< HEAD
	/* End of file Checkout.php */
/* Location: ./application/controllers/home/Checkout.php */
=======
>>>>>>> 87f29114f3c2c4ce928dd20fbcb1b05199d17ba8
