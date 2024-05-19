<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Kastemer extends CI_Controller
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

			$this->data['link_active'] = 'kastemer';

			//buat permission
			if (!$this->tank_auth->permit($this->data['link_active'])) {
				redirect('Home');
			}

			$this->load->model("Showmenu_model");
			$this->data['ShowMenu'] = $this->Showmenu_model->getShowMenu();

			$OpenShowMenu = $this->Showmenu_model->getOpenShowMenu($this->data);

			$this->data['openMenu'] = $this->Showmenu_model->getDataOpenMenu($OpenShowMenu->id_menu_parent);

			$this->load->model("Menu_model");
			$this->load->model('Kastemer_model');
		}
	}

	public function index()
	{
		$this->data['title'] = "Kastemer";

		$this->data['breadcrumbs'] = [];

		$this->data['breadcrumbs'][] = [
			'active' => FALSE,
			'text' => 'Data Master',
			'class' => 'breadcrumb-item pe-3 text-white',
			'href' => ''
		];

		$this->data['breadcrumbs'][] = [
			'active' => TRUE,
			'text' => 'Data Kastemer',
			'class' => 'breadcrumb-item pe-3 text-gray-400',
			'href' => site_url('kastemer')
		];

		$this->data['list_kastemer'] = $this->Kastemer_model->getAllKastemer();

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('kastemer/views', $this->data);
		$this->load->view('component/footer');
	}

	public function add()
	{
		$this->form_validation->set_rules('segmen', 'Segmen', 'required|trim');
		$this->form_validation->set_rules('kastemer', 'Kastemer', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'id_segmen' => decrypt_url($this->input->post('segmen')),
				'kastemer' => $this->input->post('kastemer'),
				'tgl_berdiri_kastemer' => $this->input->post('tgl_berdiri'),
				'email_kastemer' => $this->input->post('email_perusahaan'),
				'no_tlp_kastemer' => $this->input->post('no_tlp_perusahaan'),
				'alamat_kastemer' => $this->input->post('alamat'),
				'nama_pic' => $this->input->post('nama_pic'),
				'tgl_lahir_pic' => $this->input->post('tgl_lahir_pic'),
				'jabatan_pic' => $this->input->post('jabatan_pic'),
				'email_pic' => $this->input->post('email_pic'),
				'no_hp_pic' => $this->input->post('no_hp_pic'),
				'created_by' => $this->data['user_id'],
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			);

			$result = $this->Kastemer_model->addKastemer($data);

			if (count((array)$this->input->post('kbli_id')) != '0') {
				foreach ($this->input->post('kbli_id') as $key => $value) {
					$data_kbli = [
						'id_kastemer' => $result,
						'id_kbli' => decrypt_url($value),
						'created_by' => $this->data['user_id'],
						'created_at' => date('Y-m-d H:i:s'),
						'updated_at' => date('Y-m-d H:i:s')
					];

					$this->Kastemer_model->addKBLI($data_kbli);
				}
			}

			if (count((array)$this->input->post('count_vip')) != '0') {
				foreach ($this->input->post('count_vip') as $key => $value_vip) {
					$data_vip = [
						'id_kastemer' => $result,
						'nama_vip' => $this->input->post('nama_vip')[$key],
						'tgl_lahir_vip' => $this->input->post('tgl_lahir_vip')[$key],
						'jabatan_vip' => $this->input->post('jabatan_vip')[$key],
						'email_vip' => $this->input->post('email_vip')[$key],
						'no_tlp_vip' => $this->input->post('no_tlp_vip')[$key],
						'created_by' => $this->data['user_id'],
						'created_at' => date('Y-m-d H:i:s'),
						'updated_at' => date('Y-m-d H:i:s')
					];

					$this->Kastemer_model->addVIP($data_vip);
				}
			}

			if ($result) {
				$this->session->set_flashdata('message_success', 'Berhasil menambahkan data kastemer');

				redirect('kastemer');
			}
		} else {
			$this->data['selected_segmen'] = $this->input->post('segmen');
			$this->data['kastemer'] = $this->input->post('kastemer');
			$this->data['email_perusahaan'] = $this->input->post('email_perusahaan');
			$this->data['no_tlp_perusahaan'] = $this->input->post('no_tlp_perusahaan');
			$this->data['alamat'] = $this->input->post('alamat');
			$this->data['nama_pic'] = $this->input->post('nama_pic');
			$this->data['email_pic'] = $this->input->post('email_pic');
			$this->data['no_hp_pic'] = $this->input->post('no_hp_pic');
			$this->data['tgl_berdiri'] = $this->input->post('tgl_berdiri');
			$this->data['tgl_lahir_pic'] = $this->input->post('tgl_lahir_pic');
			$this->data['jabatan_pic'] = $this->input->post('jabatan_pic');

			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->data['action'] = site_url('kastemer/tambah');
			$this->data['url'] = site_url('kastemer');
			$this->data['title'] = "Kastemer";

			$this->data['breadcrumbs'] = [];

			$this->data['breadcrumbs'][] = [
				'active' => FALSE,
				'text' => 'Data Master',
				'class' => 'breadcrumb-item pe-3 text-white',
				'href' => ''
			];

			$this->data['breadcrumbs'][] = [
				'active' => TRUE,
				'text' => 'Data Kastemer',
				'class' => 'breadcrumb-item pe-3 text-gray-400',
				'href' => site_url('kastemer')
			];

			$this->data['list_segmen'] = $this->Kastemer_model->getAllSegmen();
			$this->data['list_KBLI'] = $this->Kastemer_model->getAllKBLI();

			$this->data['listKBLiSelected'] = [];
			if ($this->input->post('kbli_id') != NULL) {
				foreach ($this->input->post('kbli_id') as $val_kbli) {
					$this->data['listKBLiSelected'][] = $val_kbli;
				}
			}

			$this->load->view('component/header', $this->data);
			$this->load->view('component/sidebar', $this->data);
			$this->load->view('kastemer/form', $this->data);
			$this->load->view('component/footer');
		}
	}

	public function update($id_kastemer)
	{
		$this->form_validation->set_rules('segmen', 'Segmen', 'required|trim');
		$this->form_validation->set_rules('kastemer', 'Kastemer', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				'id_segmen' => decrypt_url($this->input->post('segmen')),
				'kastemer' => $this->input->post('kastemer'),
				'tgl_berdiri_kastemer' => $this->input->post('tgl_berdiri'),
				'email_kastemer' => $this->input->post('email_perusahaan'),
				'no_tlp_kastemer' => $this->input->post('no_tlp_perusahaan'),
				'alamat_kastemer' => $this->input->post('alamat'),
				'nama_pic' => $this->input->post('nama_pic'),
				'tgl_lahir_pic' => $this->input->post('tgl_lahir_pic'),
				'jabatan_pic' => $this->input->post('jabatan_pic'),
				'email_pic' => $this->input->post('email_pic'),
				'no_hp_pic' => $this->input->post('no_hp_pic'),
				'created_by' => $this->data['user_id'],
				'updated_at' => date('Y-m-d H:i:s')
			);

			$result = $this->Kastemer_model->updateKastemer($data, decrypt_url($id_kastemer));

			$this->Kastemer_model->deleteKBLIKastemer(decrypt_url($id_kastemer));

			if (count((array)$this->input->post('kbli_id')) != '0') {
				foreach ($this->input->post('kbli_id') as $key => $value) {
					$data_kbli = [
						'id_kastemer' => decrypt_url($id_kastemer),
						'id_kbli' => decrypt_url($value),
						'created_by' => $this->data['user_id'],
						'created_at' => date('Y-m-d H:i:s'),
						'updated_at' => date('Y-m-d H:i:s')
					];

					$this->Kastemer_model->addKBLI($data_kbli);
				}
			}

			foreach ($this->input->post('form_equivalent') as $key => $value_vip) {
				if (!empty($value_vip)) {
					$data_vip_update = [
						'nama_vip' => $this->input->post('nama_vip')[$key],
						'tgl_lahir_vip' => $this->input->post('tgl_lahir_vip')[$key],
						'jabatan_vip' => $this->input->post('jabatan_vip')[$key],
						'email_vip' => $this->input->post('email_vip')[$key],
						'no_tlp_vip' => $this->input->post('no_tlp_vip')[$key],
						'created_by' => $this->data['user_id'],
						'updated_at' => date('Y-m-d H:i:s')
					];

					$this->Kastemer_model->updateVIP($data_vip_update, decrypt_url($this->input->post('form_equivalent')[$key]));
				}

				if (empty($value_vip)) {
					$data_vip_insert = [
						'id_kastemer' => decrypt_url($id_kastemer),
						'nama_vip' => $this->input->post('nama_vip')[$key],
						'tgl_lahir_vip' => $this->input->post('tgl_lahir_vip')[$key],
						'jabatan_vip' => $this->input->post('jabatan_vip')[$key],
						'email_vip' => $this->input->post('email_vip')[$key],
						'no_tlp_vip' => $this->input->post('no_tlp_vip')[$key],
						'created_by' => $this->data['user_id'],
						'created_at' => date('Y-m-d H:i:s'),
						'updated_at' => date('Y-m-d H:i:s')
					];

					$this->Kastemer_model->addVIP($data_vip_insert);
				}
			}

			if ($result) {
				$this->session->set_flashdata('message_success', 'Berhasil menyunting data kastemer');

				redirect('kastemer');
			}
		} else {
			$this->data['selected_segmen'] = $this->input->post('segmen');
			$this->data['kastemer'] = $this->input->post('kastemer');
			$this->data['email_perusahaan'] = $this->input->post('email_perusahaan');
			$this->data['no_tlp_perusahaan'] = $this->input->post('no_tlp_perusahaan');
			$this->data['alamat'] = $this->input->post('alamat');
			$this->data['nama_pic'] = $this->input->post('nama_pic');
			$this->data['email_pic'] = $this->input->post('email_pic');
			$this->data['no_hp_pic'] = $this->input->post('no_hp_pic');
			$this->data['tgl_berdiri'] = $this->input->post('tgl_berdiri');
			$this->data['tgl_lahir_pic'] = $this->input->post('tgl_lahir_pic');
			$this->data['jabatan_pic'] = $this->input->post('jabatan_pic');

			$kastemer = $this->Kastemer_model->getDetailKastemer(decrypt_url($id_kastemer));

			$this->data['list_vip'] = $this->Kastemer_model->getAllVIP(decrypt_url($id_kastemer));

			$this->data['id_kastemer'] = $id_kastemer;
			$this->data['selected_segmen'] = encrypt_url($kastemer->id_segmen);
			$this->data['kastemer'] = $kastemer->kastemer;
			$this->data['tgl_berdiri'] = $kastemer->tgl_berdiri_kastemer;
			$this->data['email_perusahaan'] = $kastemer->email_kastemer;
			$this->data['no_tlp_perusahaan'] = $kastemer->no_tlp_kastemer;
			$this->data['alamat'] = $kastemer->alamat_kastemer;
			$this->data['nama_pic'] = $kastemer->nama_pic;
			$this->data['jabatan_pic'] = $kastemer->jabatan_pic;
			$this->data['tgl_lahir_pic'] = $kastemer->tgl_lahir_pic;
			$this->data['email_pic'] = $kastemer->email_pic;
			$this->data['no_hp_pic'] = $kastemer->no_hp_pic;

			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->data['action'] = site_url('kastemer/sunting/' . $id_kastemer);
			$this->data['url'] = site_url('kastemer');
			$this->data['title'] = "Kastemer";

			$this->data['breadcrumbs'] = [];

			$this->data['breadcrumbs'][] = [
				'active' => FALSE,
				'text' => 'Data Master',
				'class' => 'breadcrumb-item pe-3 text-white',
				'href' => ''
			];

			$this->data['breadcrumbs'][] = [
				'active' => TRUE,
				'text' => 'Data Kastemer',
				'class' => 'breadcrumb-item pe-3 text-gray-400',
				'href' => site_url('kastemer')
			];

			$this->data['list_segmen'] = $this->Kastemer_model->getAllSegmen();
			$this->data['list_KBLI'] = $this->Kastemer_model->getAllKBLI();
			$this->data['listKBLiSelected'] = $this->Kastemer_model->getKBLISelected(decrypt_url($id_kastemer));

			$this->load->view('component/header', $this->data);
			$this->load->view('component/sidebar', $this->data);
			$this->load->view('kastemer/form', $this->data);
			$this->load->view('component/footer');
		}
	}

	public function detail($id_kastemer)
	{
		$this->data['title'] = "Kastemer";

		$this->data['breadcrumbs'] = [];

		$this->data['breadcrumbs'][] = [
			'active' => FALSE,
			'text' => 'Data Master',
			'class' => 'breadcrumb-item pe-3 text-white',
			'href' => ''
		];

		$this->data['breadcrumbs'][] = [
			'active' => TRUE,
			'text' => 'Data Kastemer',
			'class' => 'breadcrumb-item pe-3 text-gray-400',
			'href' => site_url('kastemer')
		];

		$this->data['url'] = site_url('kastemer');

		$this->data['list_kbli'] = $this->Kastemer_model->selectedKKBLIKastemer(decrypt_url($id_kastemer));
		$this->data['list_vip'] = $this->Kastemer_model->getAllVIP(decrypt_url($id_kastemer));

		$data_kbli = [];
		foreach ($this->data['list_kbli'] as $key => $kbli) {
			$data_kbli[] = $kbli->id_kbli;
		}

		$this->data['list_produk'] = $this->Kastemer_model->getAllProduk($data_kbli);

		$kastemer = $this->Kastemer_model->getDetailKastemer(decrypt_url($id_kastemer));

		$this->data['id_kastemer'] = $id_kastemer;
		$this->data['kastemer'] = $kastemer->kastemer;
		$this->data['segmen'] = $kastemer->segmen;
		$this->data['tgl_berdiri_kastemer'] = $kastemer->tgl_berdiri_kastemer;
		$this->data['email_perusahaan'] = $kastemer->email_kastemer;
		$this->data['no_tlp_perusahaan'] = $kastemer->no_tlp_kastemer;
		$this->data['alamat'] = $kastemer->alamat_kastemer;
		$this->data['nama_pic'] = $kastemer->nama_pic;
		$this->data['tgl_lahir_pic'] = $kastemer->tgl_lahir_pic;
		$this->data['jabatan_pic'] = $kastemer->jabatan_pic;
		$this->data['email_pic'] = $kastemer->email_pic;
		$this->data['no_hp_pic'] = $kastemer->no_hp_pic;

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('kastemer/detail', $this->data);
		$this->load->view('component/footer');
	}

	public function deleted($id_kastemer)
	{
		$data = [
			'updated_at' => date('Y-m-d H:i:s'),
			'deleted_at' => date('Y-m-d H:i:s')
		];

		$this->Kastemer_model->deletedKBLIKastemer(decrypt_url($id_kastemer), $data);

		$result = $this->Kastemer_model->deleteKastemer(decrypt_url($id_kastemer), $data);

		if ($result) {
			$this->session->set_flashdata('msg', 'Anda berhasil menghapus data kastemer');

			redirect('kastemer');
		}
	}

	public function deleted_vip($id_kastemer, $id_vip)
	{
		$result = $this->Kastemer_model->deleteVIP(decrypt_url($id_kastemer), decrypt_url($id_vip));

		if ($result) {
			$this->session->set_flashdata('msg', 'Anda berhasil mengahapus data VIP');

			redirect('kastemer/sunting/' . $id_kastemer);
		}
	}

	public function form_import()
	{
		$this->data['title'] = "Kastemer";

		$this->data['breadcrumbs'] = [];

		$this->data['breadcrumbs'][] = [
			'active' => FALSE,
			'text' => 'Data Master',
			'class' => 'breadcrumb-item pe-3 text-white',
			'href' => ''
		];

		$this->data['breadcrumbs'][] = [
			'active' => TRUE,
			'text' => 'Data Kastemer',
			'class' => 'breadcrumb-item pe-3 text-gray-400',
			'href' => site_url('kastemer')
		];

		$this->data['url'] = site_url('kastemer');

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('kastemer/import', $this->data);
		$this->load->view('component/footer');
	}

	public function import()
	{
		$path = 'documents/kastemer/';
		$json = [];

		$this->upload_config($path);

		if (!$this->upload->do_upload('file')) {
			$json = [
				'error_message' => $this->showErrorMessage($this->upload->display_errors()),
			];
		} else {
			$file_data = $this->upload->data();
			$file_name = $path . $file_data['file_name'];
			$arr_file = explode('.', $file_name);
			$extension = end($arr_file);

			if ('csv' == $extension) {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
			} else {
				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			}

			$spreadsheet = $reader->load($file_name);
			$sheet_data = $spreadsheet->getActiveSheet()->toArray();
			$list = [];

			foreach ($sheet_data as $key => $val) {
				if ($key != 0) {
					$list [] = [
						'kastemer' => $val[0],
						'alamat_kastemer' => $val[1],
						'no_tlp_kastemer' => $val[2],
						'email_kastemer' => $val[3],
						'tgl_berdiri_kastemer' => $val[4],
						'nama_pic' => $val[5],
						'tgl_lahir_pic' => $val[6],
						'jabatan_pic' => $val[7],
						'no_hp_pic' => $val[8],
						'email_pic' => $val[9],
						'created_by' => $this->data['user_id'],
						'created_at' => date('Y-m-d H:i:s'),
						'updated_at' => date('Y-m-d H:i:s')
					];
				}
			}

			if (file_exists($file_name))
				unlink($file_name);

			if (count($list) > 0) {
				$result = $this->Kastemer_model->addBatchKastemer($list);
				if ($result) {
					$json = [
						'success_message' => $this->showSuccessMessage("Data yang Anda masukan telah berhasil disimpan."),
					];
				} else {
					$json = [
						'error_message' => $this->showErrorMessage("Data yang Anda masukan telah gagal disimpan.")
					];
				}
			} else {
				$json = [
					'error_message' => $this->showErrorMessage("No new record is found."),
				];
			}
		}

		echo json_encode($json);
	}

	public function upload_config($path)
	{
		if (!is_dir($path))
			mkdir($path, 0777, TRUE);

		$config['upload_path'] = './' . $path;
		$config['allowed_types'] = 'csv|CSV|xlsx|XLSX|xls|XLS';
		$config['max_filename'] = '255';
		$config['encrypt_name'] = TRUE;
		$config['max_size'] = 4096;

		$this->load->library('upload', $config);
	}

	private function showSuccessMessage(string $string)
	{
		return $string;
	}

	private function showErrorMessage(string $string)
	{
		return $string;
	}


	public function download()
	{
		$this->load->helper('download');

		force_download('assets/file/Contoh_Template_Data_Kastemer.xlsx', NULL);
	}
}
