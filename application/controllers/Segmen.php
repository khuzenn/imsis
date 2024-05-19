<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Segmen extends CI_Controller
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

			$this->data['link_active'] = 'segmen';

			//buat permission
			if (!$this->tank_auth->permit($this->data['link_active'])) {
				redirect('Home');
			}

			$this->load->model("Showmenu_model");
			$this->data['ShowMenu'] = $this->Showmenu_model->getShowMenu();

			$OpenShowMenu = $this->Showmenu_model->getOpenShowMenu($this->data);

			$this->data['openMenu'] = $this->Showmenu_model->getDataOpenMenu($OpenShowMenu->id_menu_parent);

			$this->load->model("Menu_model");
			$this->load->model('Segmen_model');
		}
	}

	public function index()
	{
		$this->data['title'] = "Segmen";

		$this->data['breadcrumbs'] = [];

		$this->data['breadcrumbs'][] = [
			'active' => FALSE,
			'text' => 'Data Master',
			'class' => 'breadcrumb-item pe-3 text-white',
			'href' => ''
		];

		$this->data['breadcrumbs'][] = [
			'active' => TRUE,
			'text' => 'Data Segmen',
			'class' => 'breadcrumb-item pe-3 text-gray-400',
			'href' => site_url('segmen')
		];

		$this->data['list_segmen'] = $this->Segmen_model->getAllSegmen();

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('segmen/views', $this->data);
		$this->load->view('component/footer');
	}

	public function add()
	{
		$this->form_validation->set_rules('segmen', 'Segmen', 'required|trim');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'segmen' => $this->input->post('segmen'),
				'created_by' => $this->data['user_id'],
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			);

			$result = $this->Segmen_model->addSegmen($data);

			if ($result) {
				$this->session->set_flashdata('message_success', 'Berhasil menambahkan data segmen');

				redirect('segmen');
			}
		} else {
			$this->data['segmen'] = $this->input->post('segmen');

			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->data['action'] = site_url('segmen/tambah');
			$this->data['url'] = site_url('segmen');
			$this->data['title'] = "Kategori Produk";

			$this->data['breadcrumbs'] = [];

			$this->data['breadcrumbs'][] = [
				'active' => FALSE,
				'text' => 'Data Master',
				'class' => 'breadcrumb-item pe-3 text-white',
				'href' => ''
			];

			$this->data['breadcrumbs'][] = [
				'active' => TRUE,
				'text' => 'Data Segmen',
				'class' => 'breadcrumb-item pe-3 text-gray-400',
				'href' => site_url('segmen')
			];

			$this->load->view('component/header', $this->data);
			$this->load->view('component/sidebar', $this->data);
			$this->load->view('segmen/form', $this->data);
			$this->load->view('component/footer');
		}
	}

	public function update($id_segmen)
	{
		$this->form_validation->set_rules('segmen', 'Segmen', 'required|trim');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'segmen' => $this->input->post('segmen'),
				'created_by' => $this->data['user_id'],
				'updated_at' => date('Y-m-d H:i:s')
			);

			$result = $this->Segmen_model->updateSegmen($data, decrypt_url($id_segmen));

			if ($result) {
				$this->session->set_flashdata('message_success', 'Berhasil menyunting data segmen');

				redirect('segmen');
			}
		} else {
			$this->data['segmen'] = $this->input->post('segmen');

			$segmen = $this->Segmen_model->getDetailSegmen(decrypt_url($id_segmen));

			$this->data['segmen'] = $segmen->segmen;

			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->data['action'] = site_url('segmen/sunting/' . $id_segmen);
			$this->data['url'] = site_url('segmen');
			$this->data['title'] = "Segmen";

			$this->data['breadcrumbs'] = [];

			$this->data['breadcrumbs'][] = [
				'active' => FALSE,
				'text' => 'Data Master',
				'class' => 'breadcrumb-item pe-3 text-white',
				'href' => ''
			];

			$this->data['breadcrumbs'][] = [
				'active' => TRUE,
				'text' => 'Data Segmen',
				'class' => 'breadcrumb-item pe-3 text-gray-400',
				'href' => site_url('segmen')
			];

			$this->load->view('component/header', $this->data);
			$this->load->view('component/sidebar', $this->data);
			$this->load->view('segmen/form', $this->data);
			$this->load->view('component/footer');
		}
	}

	public function detail($id_segmen)
	{
		$this->data['title'] = "Segmen";

		$this->data['breadcrumbs'] = [];

		$this->data['breadcrumbs'][] = [
			'active' => FALSE,
			'text' => 'Data Master',
			'class' => 'breadcrumb-item pe-3 text-white',
			'href' => ''
		];

		$this->data['breadcrumbs'][] = [
			'active' => TRUE,
			'text' => 'Data Segmen',
			'class' => 'breadcrumb-item pe-3 text-gray-400',
			'href' => site_url('segmen')
		];

		$detail_segmen = $this->Segmen_model->getDetailSegmen(decrypt_url($id_segmen));

		$this->data['segmen'] = $detail_segmen->segmen;
		$this->data['created_at'] = $detail_segmen->created_at;

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('segmen/detail', $this->data);
		$this->load->view('component/footer');
	}
}
