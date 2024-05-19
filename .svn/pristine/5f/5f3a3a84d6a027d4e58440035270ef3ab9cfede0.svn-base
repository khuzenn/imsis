<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lini_bisnis extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('tank_auth');

		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$this->data['dataUser'] = $this->session->userdata('data_ldap');

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

			$this->data['link_active'] = 'lini-bisnis';

			//buat permission
			if (!$this->tank_auth->permit($this->data['link_active'])) {
				redirect('Home');
			}

			$this->load->model("Showmenu_model");
			$this->data['ShowMenu'] = $this->Showmenu_model->getShowMenu();

			$OpenShowMenu = $this->Showmenu_model->getOpenShowMenu($this->data);

			$this->data['openMenu'] = $this->Showmenu_model->getDataOpenMenu($OpenShowMenu->id_menu_parent);

			$this->load->model("Menu_model");
			$this->load->model('Lini_bisnis_model');
		}
	}

	public function index()
	{
		$this->data['title'] = "Lini Bisnis";

		$this->data['breadcrumbs'] = [];

		$this->data['breadcrumbs'][] = [
			'active' => FALSE,
			'text' => 'Data Master',
			'class' => 'breadcrumb-item pe-3 text-white',
			'href' => ''
		];

		$this->data['breadcrumbs'][] = [
			'active' => TRUE,
			'text' => 'Data Lini Bisnis',
			'class' => 'breadcrumb-item pe-3 text-gray-400',
			'href' => site_url('lini-bisnis')
		];

		$this->data['list_lini_bisnis'] = $this->Lini_bisnis_model->getAllLiniBisnis();

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('lini_bisnis/views', $this->data);
		$this->load->view('component/footer');
	}

	public function update($id_linis_bisnis)
	{
		$this->form_validation->set_rules('lini_bisnis', 'Lini Bisnis', 'required|trim');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'lini_bisnis' => $this->input->post('lini_bisnis'),
				'created_by' => $this->data['user_id'],
				'updated_at' => date('Y-m-d H:i:s')
			);

			$result = $this->Lini_bisnis_model->updateLiniBisnis($data, decrypt_url($id_linis_bisnis));

			if ($result) {
				$this->session->set_flashdata('message_success', 'Berhasil menyunting data lini bisnis');

				redirect('lini-bisnis');
			}
		} else {
			$this->data['lini_bisnis'] = $this->input->post('lini_bisnis');

			$lini_bisnis = $this->Lini_bisnis_model->getDetailLiniBisnis(decrypt_url($id_linis_bisnis));

			$this->data['lini_bisnis'] = $lini_bisnis->lini_bisnis;

			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->data['action'] = site_url('lini-bisnis/sunting/' . $id_linis_bisnis);
			$this->data['url'] = site_url('lini-bisnis');
			$this->data['title'] = "Lini Bisnis";

			$this->data['breadcrumbs'] = [];

			$this->data['breadcrumbs'][] = [
				'active' => FALSE,
				'text' => 'Data Master',
				'class' => 'breadcrumb-item pe-3 text-white',
				'href' => ''
			];

			$this->data['breadcrumbs'][] = [
				'active' => TRUE,
				'text' => 'Data Lini Bisnis',
				'class' => 'breadcrumb-item pe-3 text-gray-400',
				'href' => site_url('lini-bisnis')
			];

			$this->load->view('component/header', $this->data);
			$this->load->view('component/sidebar', $this->data);
			$this->load->view('lini_bisnis/form', $this->data);
			$this->load->view('component/footer');
		}
	}

	public function detail($id_lini_bisnis)
	{
		$this->data['title'] = "Lini Bisnis";

		$this->data['breadcrumbs'] = [];

		$this->data['breadcrumbs'][] = [
			'active' => FALSE,
			'text' => 'Data Master',
			'class' => 'breadcrumb-item pe-3 text-white',
			'href' => ''
		];

		$this->data['breadcrumbs'][] = [
			'active' => TRUE,
			'text' => 'Data Lini Bisnis',
			'class' => 'breadcrumb-item pe-3 text-gray-400',
			'href' => site_url('lini-bisnis')
		];

		$detail_lini_bisnis = $this->Lini_bisnis_model->getDetailLiniBisnis(decrypt_url($id_lini_bisnis));

		$this->data['lini_bisnis'] = $detail_lini_bisnis->lini_bisnis;
		$this->data['created_at'] = $detail_lini_bisnis->created_at;

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('lini_bisnis/detail', $this->data);
		$this->load->view('component/footer');
	}
}
