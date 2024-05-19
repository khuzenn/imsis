<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target_am extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		$this->load->library('tank_auth');

		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->data['user_id'] = $this->tank_auth->get_user_id();
			$this->data['username'] = $this->tank_auth->get_username();
			$this->data['email'] = $this->tank_auth->get_email();

			$profile = $this->tank_auth->get_user_profile($this->data['user_id']);

			$this->data['profile_name'] = $profile['name'];
			$this->data['profile_foto'] = $profile['foto'];

			foreach ($this->tank_auth->get_roles($this->data['user_id']) as $val) {
				$this->data['role_id'] = $val['role_id'];
				$this->data['role'] = $val['role'];
				$this->data['full_name_role'] = $val['full'];
			}

			$this->data['link_active'] = 'target-am';

			//buat permission
			if (!$this->tank_auth->permit($this->data['link_active'])) {
				redirect('Home');
			}

			$this->load->model("Showmenu_model");
			$this->data['ShowMenu'] = $this->Showmenu_model->getShowMenu();

			$OpenShowMenu = $this->Showmenu_model->getOpenShowMenu($this->data);

			$this->data['openMenu'] = $this->Showmenu_model->getDataOpenMenu($OpenShowMenu->id_menu_parent);

			$this->load->model("Menu_model");
			$this->load->model("Target_am_model");
		}
	}

	public function index()
	{
		$this->form_validation->set_rules('lini_bisnis', 'Lini Bisnis', 'required');
		$this->form_validation->set_rules('segmen', 'Segmen', 'required');
		$this->form_validation->set_rules('kastemer', 'Kastemer', 'required');
		$this->form_validation->set_rules('produk', 'Produk', 'required');
		$this->form_validation->set_rules('unit_price', 'Unit Price', 'required');
		$this->form_validation->set_rules('volume', 'Volume', 'required');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'id_users' => $this->data['user_id'],
				'id_lini_bisnis' => $this->input->post('lini_bisnis'),
				'id_segmen' => $this->input->post('segmen'),
				'id_kastemer' => $this->input->post('kastemer'),
				'id_produk' => $this->input->post('produk'),
				'unit_price' => $this->input->post('unit_price'),
				'volume' => $this->input->post('volume'),
				'target_price' => $this->input->post('unit_price') * $this->input->post('volume'),
				'created_by' => $this->data['user_id'],
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			);

			$result = $this->Target_am_model->addTargetAm($data);

			if ($result) {
				$this->session->set_flashdata('msg', 'Anda berhasil menambahkan data target capaian AM');

				redirect('target-am');
			}
		} else {
			$this->data['selected_lini_bisnis'] = $this->input->post('lini_bisnis');
			$this->data['selected_segmen'] = $this->input->post('segmen');
			$this->data['selected_kastemer'] = $this->input->post('kastemer');
			$this->data['selected_produk'] = $this->input->post('produk');
			$this->data['unit_price'] = $this->input->post('unit_price');
			$this->data['volume'] = $this->input->post('volume');

			$this->data['title'] = 'Target Capaian AM';

			$this->data['breadcrumbs'] = [];

			$this->data['breadcrumbs'][] = [
				'active' => FALSE,
				'text' => 'Target Capaian AM',
				'class' => 'breadcrumb-item pe-3 text-gray-400',
				'href' => site_url('target-am')
			];

			$this->data['list_lini_bisnis'] = $this->Target_am_model->getAllLiniBisnis();
			$this->data['list_segmen'] = $this->Target_am_model->getAllSegmen();
			$this->data['list_kastemer'] = $this->Target_am_model->getAllKastemer();
			$this->data['list_produk'] = $this->Target_am_model->getAllProduk();

			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->data['action'] = site_url('target-am');

			$this->load->view('component/header', $this->data);
			$this->load->view('component/sidebar', $this->data);
			$this->load->view('target_am/form', $this->data);
			$this->load->view('component/footer');
		}
	}

	public function get_kastemer()
	{
		$getKastemer = $this->Target_am_model->getDatailKastemer(decrypt_url($this->input->post('id_segmen')));

		$kastemer_arr = array();
		foreach ($getKastemer as $kastemer) {
			$id_kastemer = $kastemer->id_kastemer;
			$kastemer = $kastemer->kastemer;

			$kastemer_arr[] = array("id_kastemer" => encrypt_url($id_kastemer), "kastemer" => $kastemer);
		}

		echo json_encode($kastemer_arr);
	}

	public function get_produk()
	{
		$getKbli = $this->Target_am_model->getKbliKastemer(decrypt_url($this->input->post('id_kastemer')));

		$kbli_arr = [];
		foreach ($getKbli as $kbli) {
			$kbli_arr[] = $kbli->id_kbli;
		}

		$getProduk = $this->Target_am_model->getAllProdukKbli($kbli_arr);

		$produk_arr = [];
		foreach ($getProduk as $produk) {
			$id_produk = $produk->id_produk;
			$produk = $produk->produk;

			$produk_arr[] = ["id_produk" => encrypt_url($id_produk), "produk" => $produk];
		}

		echo json_encode($produk_arr);
	}
}
