<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller
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

			$this->data['link_active'] = 'produk';

			//buat permission
			if (!$this->tank_auth->permit($this->data['link_active'])) {
				redirect('Home');
			}

			$this->load->model("Showmenu_model");
			$this->data['ShowMenu'] = $this->Showmenu_model->getShowMenu();

			$OpenShowMenu = $this->Showmenu_model->getOpenShowMenu($this->data);

			$this->data['openMenu'] = $this->Showmenu_model->getDataOpenMenu($OpenShowMenu->id_menu_parent);

			$this->load->model("Menu_model");
			$this->load->model('Produk_model');
		}
	}

	public function index()
	{
		$this->data['title'] = "Produk";

		$this->data['breadcrumbs'] = [];

		$this->data['breadcrumbs'][] = [
			'active' => FALSE,
			'text' => 'Data Master',
			'class' => 'breadcrumb-item pe-3 text-white',
			'href' => ''
		];

		$this->data['breadcrumbs'][] = [
			'active' => TRUE,
			'text' => 'Data Produk',
			'class' => 'breadcrumb-item pe-3 text-gray-400',
			'href' => site_url('produk')
		];

		$jumlah_data = $this->Produk_model->jumlahDataProduk();

		$this->load->library('pagination');

		$config['attributes'] = array('class' => 'page-link');
		$config['total_rows'] = $jumlah_data;
		$config['next_link'] = '<i class="next"></i>';
		$config['prev_link'] = '<i class="previous"></i>';
		$config['first_link'] = '<i class="previous"></i>&nbsp awal';
		$config['last_link'] = 'akhir &nbsp<i class="next next"></i>';
		$config['full_tag_open'] = '<ul class="pagination pt-5">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-item ">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li class="page-item previous">';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-item next">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item next">';
		$config['last_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li class="page-item previous">';
		$config['first_tag_close'] = '</li>';

		$config['page_query_string'] = TRUE;
		$config['reuse_query_string'] = TRUE;

		$config['base_url'] = base_url() . 'produk';

		if (isset($_GET['show-row']) && !empty($_GET['show-row'])) {
			$config['per_page'] = $_GET['show-row'];
		} else {
			$config['per_page'] = 12;
		}

		// $config['per_page'] = 12;

		$this->data['per_page'] = (isset($_GET['show-row'])) ? $_GET['show-row'] : 12;

		$from = (isset($_GET['per_page'])) ? $_GET['per_page'] : NULL;

		$this->pagination->initialize($config);

		$this->data['list_produk'] = $this->Produk_model->getAllProduk($config['per_page'], $from);
		$this->data['action'] = site_url('produk/index');

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('produk/views', $this->data);
		$this->load->view('component/footer');
	}

	public function search()
	{
		$this->data['title'] = "Produk";

		$this->data['breadcrumbs'] = [];

		$this->data['breadcrumbs'][] = [
			'active' => FALSE,
			'text' => 'Data Master',
			'class' => 'breadcrumb-item pe-3 text-white',
			'href' => ''
		];

		$this->data['breadcrumbs'][] = [
			'active' => TRUE,
			'text' => 'Data Produk',
			'class' => 'breadcrumb-item pe-3 text-gray-400',
			'href' => site_url('produk')
		];

		$this->data['keyword'] = $_GET['keyword'];

		// get search string
		$search = ($this->data['keyword']) ? $this->data['keyword'] : NULL;
		$search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

		if ($_GET['keyword'] == NULL) {
			redirect('produk');
		}

		$this->data['keyword'] = $search;

		$jumlah_data = $this->Produk_model->jumlahDataProdukSearch($search);

		$this->load->library('pagination');

		$config['attributes'] = array('class' => 'page-link');
		$config['total_rows'] = $jumlah_data;
		$config['next_link'] = '<i class="next"></i>';
		$config['prev_link'] = '<i class="previous"></i>';
		$config['first_link'] = '<i class="previous"></i>&nbsp awal';
		$config['last_link'] = 'akhir &nbsp<i class="next next"></i>';
		$config['full_tag_open'] = '<ul class="pagination pt-5">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li class="page-item ">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
		$config['prev_tag_open'] = '<li class="page-item previous">';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-item next">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item next">';
		$config['last_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li class="page-item previous">';
		$config['first_tag_close'] = '</li>';

		$config['page_query_string'] = TRUE;
		$config['reuse_query_string'] = TRUE;

		$config['base_url'] = site_url("produk/search");

		if (isset($_GET['show-row']) && !empty($_GET['show-row'])) {
			$config['per_page'] = $_GET['show-row'];
		} else {
			$config['per_page'] = 12;
		}

		// $config['per_page'] = 1;
		// $config["uri_segment"] = 4;

		$choice = $config["total_rows"] / $config["per_page"];

		$config["num_links"] = floor($choice);

		// $this->data['per_page'] = 10;

		$this->data['per_page'] = (isset($_GET['show-row'])) ? $_GET['show-row'] : 12;

		$this->pagination->initialize($config);

		$this->data['page'] = (isset($_GET['per_page'])) ? $_GET['per_page'] : 0;

		$this->data['list_produk'] = $this->Produk_model->getProduk($config['per_page'], $this->data['page'], $search);

		$this->data['action'] = site_url('produk/search');

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('produk/views', $this->data);
		$this->load->view('component/footer');
	}

	public function add()
	{
		$this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('produk', 'Produk', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim');

		if ($this->form_validation->run() == TRUE) {
			if (!empty($_FILES['thumbnail']['name'])) {
				$config['upload_path'] = './assets/file/thumbnail';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size'] = 10000;

				$this->load->library('upload', $config);

				$this->upload->initialize($config);

				$upload_thumbnail = [];
				if ($this->upload->do_upload('thumbnail')) {
					$fileDataThumbnail = $this->upload->data();

					$info_thumbnail = pathinfo($fileDataThumbnail['file_name']);
					$file_name_thumbnail = $info_thumbnail['filename'];

					$upload_thumbnail = [
						'nama_full_file' => $file_name_thumbnail,
						'nama_file' => $fileDataThumbnail['file_name'],
						'tipe_file' => $fileDataThumbnail['file_type'],
						'ukuran_file' => $fileDataThumbnail['file_size'],
					];
				}
			}

			if (!empty($_FILES['brosur']['name'])) {
				$config['upload_path'] = './assets/file/brosur';
				$config['allowed_types'] = 'jpg|jpeg|png|pdf';
				$config['max_size'] = 50000;

				$this->load->library('upload', $config);

				$this->upload->initialize($config);

				$upload_brosur = [];
				if ($this->upload->do_upload('brosur')) {
					$fileDataBrosur = $this->upload->data();

					$info_brosur = pathinfo($fileDataBrosur['file_name']);
					$file_name_brosur = $info_brosur['filename'];

					$upload_brosur = [
						'nama_full_file' => $file_name_brosur,
						'nama_file' => $fileDataBrosur['file_name'],
						'tipe_file' => $fileDataBrosur['file_type'],
						'ukuran_file' => $fileDataBrosur['file_size'],
					];
				}
			}

			$data = array(
				'id_kategori_produk' => decrypt_url($this->input->post('kategori_produk')),
				'produk' => $this->input->post('produk'),
				'thumbnail' => (empty($upload_thumbnail)) ? NULL : $upload_thumbnail['nama_file'],
				'thumbnail_full_name' => (empty($upload_thumbnail)) ? NULL : $upload_thumbnail['nama_full_file'],
				'thumbnail_type' => (empty($upload_thumbnail)) ? NULL : $upload_thumbnail['tipe_file'],
				'thumbnail_size' => (empty($upload_thumbnail)) ? NULL : $upload_thumbnail['ukuran_file'],
				'file_brosur' => (empty($upload_brosur)) ? NULL : $upload_brosur['nama_file'],
				'file_brosur_full_name' => (empty($upload_brosur)) ? NULL : $upload_brosur['nama_full_file'],
				'file_brosur_type' => (empty($upload_brosur)) ? NULL : $upload_brosur['tipe_file'],
				'file_brosur_size' => (empty($upload_brosur)) ? NULL : $upload_brosur['ukuran_file'],
				'harga' => str_replace('.', NULL, $this->input->post('harga')),
				'created_by' => $this->data['user_id'],
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			);

			$result = $this->Produk_model->addProduk($data);

			if (count((array)$this->input->post('kbli_id')) != '0') {
				foreach ($this->input->post('kbli_id') as $key => $value) {
					$data_kbli = [
						'id_produk' => $result,
						'id_kbli' => decrypt_url($value),
						'created_by' => $this->data['user_id'],
						'created_at' => date('Y-m-d H:i:s'),
						'updated_at' => date('Y-m-d H:i:s')
					];

					$this->Produk_model->addKBLI($data_kbli);
				}
			}

			if (count((array)$_FILES['image_produk']['name']) != '0') {
				foreach ($_FILES['image_produk']['name'] as $key => $value) {
					if (!empty($_FILES['image_produk']['name'][$key])) {
						$config['upload_path'] = './assets/file/produk';
						$config['allowed_types'] = 'jpg|jpeg|png';
						$config['max_size'] = 10000;

						$this->load->library('upload', $config);

						$this->upload->initialize($config);

						$_FILES['file_produk']['name'] = $_FILES['image_produk']['name'][$key];
						$_FILES['file_produk']['type'] = $_FILES['image_produk']['type'][$key];
						$_FILES['file_produk']['tmp_name'] = $_FILES['image_produk']['tmp_name'][$key];
						$_FILES['file_produk']['error'] = $_FILES['image_produk']['error'][$key];
						$_FILES['file_produk']['size'] = $_FILES['image_produk']['size'][$key];

						$upload_produk = [];
						if ($this->upload->do_upload('file_produk')) {
							$fileDataProduk = $this->upload->data();

							$info_image = pathinfo($fileDataProduk['file_name']);
							$file_name_image = $info_image['filename'];

							$upload_produk = [
								'nama_full_file' => $file_name_image,
								'nama_file' => $fileDataProduk['file_name'],
								'tipe_file' => $fileDataProduk['file_type'],
								'ukuran_file' => $fileDataProduk['file_size'],
							];
						}

						$data_image_produk = [
							'id_produk' => $result,
							'image_produk' => $upload_produk['nama_file'],
							'image_produk_full_name' => $upload_produk['nama_full_file'],
							'image_produk_type' => $upload_produk['tipe_file'],
							'image_produk_size' => $upload_produk['ukuran_file'],
							'created_by' => $this->data['user_id'],
							'created_at' => date('Y-m-d H:i:s'),
							'updated_at' => date('Y-m-d H:i:s')
						];

						$this->Produk_model->addProdukImage($data_image_produk);
					}
				}
			}

			if (count((array)$_FILES['presentasi']['name']) != '0') {
				foreach ($_FILES['presentasi']['name'] as $key => $value) {
					if (!empty($_FILES['presentasi']['name'][$key])) {
						$config_presentasi['upload_path'] = './assets/file/presentasi';
						$config_presentasi['allowed_types'] = 'pdf|zip|doc|docx|ppt|pptx';
						$config_presentasi['max_size'] = 50000;

						$this->load->library('upload', $config_presentasi);

						$this->upload->initialize($config_presentasi);

						$_FILES['file_presentasi']['name'] = $_FILES['presentasi']['name'][$key];
						$_FILES['file_presentasi']['type'] = $_FILES['presentasi']['type'][$key];
						$_FILES['file_presentasi']['tmp_name'] = $_FILES['presentasi']['tmp_name'][$key];
						$_FILES['file_presentasi']['error'] = $_FILES['presentasi']['error'][$key];
						$_FILES['file_presentasi']['size'] = $_FILES['presentasi']['size'][$key];

						$upload_presentasi = [];
						if ($this->upload->do_upload('file_presentasi')) {
							$fileDataPresentasi = $this->upload->data();

							$info_presentasi = pathinfo($fileDataPresentasi['file_name']);
							$file_name_presentasi = $info_presentasi['filename'];

							$upload_presentasi = [
								'nama_full_file' => $file_name_presentasi,
								'nama_file' => $fileDataPresentasi['file_name'],
								'tipe_file' => $fileDataPresentasi['file_type'],
								'ukuran_file' => $fileDataPresentasi['file_size'],
							];
						}

						$data_file_presentasi = [
							'id_produk' => $result,
							'file_presentasi' => $upload_presentasi['nama_file'],
							'file_presentasi_full_name' => $upload_presentasi['nama_full_file'],
							'file_presentasi_type' => $upload_presentasi['tipe_file'],
							'file_presentasi_size' => $upload_presentasi['ukuran_file'],
							'created_by' => $this->data['user_id'],
							'created_at' => date('Y-m-d H:i:s'),
							'updated_at' => date('Y-m-d H:i:s')
						];

						$this->Produk_model->addPresentasi($data_file_presentasi);
					}
				}
			}

			if (count((array)$this->input->post('video')) != '0') {
				foreach ($this->input->post('video') as $key => $value) {
					if (!empty($value)) {
						$data_link_youtube = [
							'id_produk' => $result,
							'link_youtube' => $value,
							'created_by' => $this->data['user_id'],
							'created_at' => date('Y-m-d H:i:s'),
							'updated_at' => date('Y-m-d H:i:s')
						];

						$this->Produk_model->addYoutube($data_link_youtube);
					}
				}
			}

			if ($result) {
				$this->session->set_flashdata('msg', 'Anda berhasil menambahkan data produk');

				redirect('produk');
			}
		} else {
			$this->data['selected_kategori_produk'] = $this->input->post('kategori_produk');
			$this->data['produk'] = $this->input->post('produk');
			$this->data['video'] = $this->input->post('video');
			$this->data['harga'] = $this->input->post('harga');

			$this->data['list_kategori_produk'] = $this->Produk_model->getAllKategoriProduk();

			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->data['action'] = site_url('produk/tambah');
			$this->data['url'] = site_url('produk');
			$this->data['title'] = "Produk";

			$this->data['breadcrumbs'] = [];

			$this->data['breadcrumbs'][] = [
				'active' => FALSE,
				'text' => 'Data Master',
				'class' => 'breadcrumb-item pe-3 text-white',
				'href' => ''
			];

			$this->data['breadcrumbs'][] = [
				'active' => TRUE,
				'text' => 'Data Produk',
				'class' => 'breadcrumb-item pe-3 text-gray-400',
				'href' => site_url('produk')
			];

			$this->data['list_KBLI'] = $this->Produk_model->getAllKBLI();

			$this->data['listKBLiSelected'] = [];

			$this->load->view('component/header', $this->data);
			$this->load->view('component/sidebar', $this->data);
			$this->load->view('produk/form', $this->data);
			$this->load->view('component/footer');
		}
	}

	public function update($id_produk)
	{
		$this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('produk', 'Produk', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim');

		if ($this->form_validation->run() == TRUE) {
			$value_produk_update = $this->Produk_model->getDataProduk(decrypt_url($id_produk));

			if (!empty($_FILES['thumbnail']['name'])) {
				if (!is_null($value_produk_update->thumbnail)) {
					$path = './assets/file/thumbnail/' . $value_produk_update->thumbnail;
					unlink($path);
				}

				$config_presentasi['upload_path'] = './assets/file/thumbnail';
				$config_presentasi['allowed_types'] = 'jpg|jpeg|png';
				$config_presentasi['max_size'] = 10000;

				$this->load->library('upload', $config_presentasi);

				$this->upload->initialize($config_presentasi);

				$upload_thumbnail = [];
				if ($this->upload->do_upload('thumbnail')) {
					$fileDataThumbnail = $this->upload->data();

					$info_thumbnail = pathinfo($fileDataThumbnail['file_name']);
					$file_name_thumnail = $info_thumbnail['filename'];

					$upload_thumbnail = [
						'nama_full_file' => $file_name_thumnail,
						'nama_file' => $fileDataThumbnail['file_name'],
						'tipe_file' => $fileDataThumbnail['file_type'],
						'ukuran_file' => $fileDataThumbnail['file_size'],
					];
				}
			}

			if (!empty($_FILES['brosur']['name'])) {
				if (!is_null($value_produk_update->file_brosur)) {
					$path = './assets/file/brosur/' . $value_produk_update->file_brosur;
					unlink($path);
				}

				$config['upload_path'] = './assets/file/brosur';
				$config['allowed_types'] = 'jpg|jpeg|png|pdf';
				$config['max_size'] = 50000;

				$this->load->library('upload', $config);

				$this->upload->initialize($config);

				$upload_brosur = [];
				if ($this->upload->do_upload('brosur')) {
					$fileDataBrosur = $this->upload->data();

					$info_brosur = pathinfo($fileDataBrosur['file_name']);
					$file_name_brosur = $info_brosur['filename'];

					$upload_brosur = [
						'nama_full_file' => $file_name_brosur,
						'nama_file' => $fileDataBrosur['file_name'],
						'tipe_file' => $fileDataBrosur['file_type'],
						'ukuran_file' => $fileDataBrosur['file_size'],
					];
				}
			}

			$data = array(
				'id_kategori_produk' => decrypt_url($this->input->post('kategori_produk')),
				'produk' => $this->input->post('produk'),
				'thumbnail' => (empty($upload_thumbnail)) ? $value_produk_update->thumbnail : $upload_thumbnail['nama_file'],
				'thumbnail_full_name' => (empty($upload_thumbnail)) ? $value_produk_update->thumbnail_full_name : $upload_thumbnail['nama_full_file'],
				'thumbnail_type' => (empty($upload_thumbnail)) ? $value_produk_update->thumbnail_type : $upload_thumbnail['tipe_file'],
				'thumbnail_size' => (empty($upload_thumbnail)) ? $value_produk_update->thumbnail_size : $upload_thumbnail['ukuran_file'],
				'file_brosur' => (empty($upload_brosur)) ? $value_produk_update->file_brosur : $upload_brosur['nama_file'],
				'file_brosur_full_name' => (empty($upload_brosur)) ? $value_produk_update->file_brosur_full_name : $upload_brosur['nama_full_file'],
				'file_brosur_type' => (empty($upload_brosur)) ? $value_produk_update->file_brosur_type : $upload_brosur['tipe_file'],
				'file_brosur_size' => (empty($upload_brosur)) ? $value_produk_update->file_brosur_size : $upload_brosur['ukuran_file'],
				'harga' => str_replace('.', NULL, $this->input->post('harga')),
				'created_by' => $this->data['user_id'],
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			);

			$result = $this->Produk_model->updateProduk(decrypt_url($id_produk), $data);

			if (count((array)$this->input->post('kbli_id')) != '0') {
				$this->Produk_model->deleteKBLIKastemer(decrypt_url($id_produk));

				foreach ($this->input->post('kbli_id') as $key => $value) {
					$data_kbli = [
						'id_produk' => decrypt_url($id_produk),
						'id_kbli' => decrypt_url($value),
						'created_by' => $this->data['user_id'],
						'created_at' => date('Y-m-d H:i:s'),
						'updated_at' => date('Y-m-d H:i:s')
					];

					$this->Produk_model->addKBLI($data_kbli);
				}
			}

			if (count((array)$this->input->post('video')) != '0') {
				$this->Produk_model->deleteUrlYoutube(decrypt_url($id_produk));

				foreach ($this->input->post('video') as $key => $value_url_video) {
					if (!empty($value_url_video)) {
						$data_youtube = [
							'id_produk' => decrypt_url($id_produk),
							'link_youtube' => $value_url_video,
							'created_by' => $this->data['user_id'],
							'created_at' => date('Y-m-d H:i:s'),
							'updated_at' => date('Y-m-d H:i:s')
						];

						$this->Produk_model->addUrlYoutube($data_youtube);
					}
				}
			}

			if (count((array)$_FILES['presentasi']['name']) != '0') {
				foreach ($_FILES['presentasi']['name'] as $key => $value_presentasi) {
					if (!empty($value_presentasi)) {
						$config_presentasi['upload_path'] = './assets/file/presentasi';
						$config_presentasi['allowed_types'] = 'pdf|zip|doc|docx|ppt|pptx';
						$config_presentasi['max_size'] = 50000;

						$this->load->library('upload', $config_presentasi);

						$this->upload->initialize($config_presentasi);

						$_FILES['file_presentasi']['name'] = $_FILES['presentasi']['name'][$key];
						$_FILES['file_presentasi']['type'] = $_FILES['presentasi']['type'][$key];
						$_FILES['file_presentasi']['tmp_name'] = $_FILES['presentasi']['tmp_name'][$key];
						$_FILES['file_presentasi']['error'] = $_FILES['presentasi']['error'][$key];
						$_FILES['file_presentasi']['size'] = $_FILES['presentasi']['size'][$key];

						$upload_presentasi = [];
						if ($this->upload->do_upload('file_presentasi')) {
							$fileDataPresentasi = $this->upload->data();

							$info_presentasi = pathinfo($fileDataPresentasi['file_name']);
							$file_name_presentasi = $info_presentasi['filename'];

							$upload_presentasi = [
								'nama_full_file' => $file_name_presentasi,
								'nama_file' => $fileDataPresentasi['file_name'],
								'tipe_file' => $fileDataPresentasi['file_type'],
								'ukuran_file' => $fileDataPresentasi['file_size'],
							];
						}

						$data_file_presentasi = [
							'id_produk' => decrypt_url($id_produk),
							'file_presentasi' => $upload_presentasi['nama_file'],
							'file_presentasi_full_name' => $upload_presentasi['nama_full_file'],
							'file_presentasi_type' => $upload_presentasi['tipe_file'],
							'file_presentasi_size' => $upload_presentasi['ukuran_file'],
							'created_by' => $this->data['user_id'],
							'created_at' => date('Y-m-d H:i:s'),
							'updated_at' => date('Y-m-d H:i:s')
						];

						$this->Produk_model->addPresentasi($data_file_presentasi);
					}
				}
			}

			if (count((array)$_FILES['image_produk']['name']) != '0') {
				foreach ($_FILES['image_produk']['name'] as $key => $value_image_produk) {
					if (!empty($value_image_produk)) {
						$config['upload_path'] = './assets/file/produk';
						$config['allowed_types'] = 'jpg|jpeg|png';
						$config['max_size'] = 10000;

						$this->load->library('upload', $config);

						$this->upload->initialize($config);

						$_FILES['file_produk']['name'] = $_FILES['image_produk']['name'][$key];
						$_FILES['file_produk']['type'] = $_FILES['image_produk']['type'][$key];
						$_FILES['file_produk']['tmp_name'] = $_FILES['image_produk']['tmp_name'][$key];
						$_FILES['file_produk']['error'] = $_FILES['image_produk']['error'][$key];
						$_FILES['file_produk']['size'] = $_FILES['image_produk']['size'][$key];

						$upload_produk = [];
						if ($this->upload->do_upload('file_produk')) {
							$fileDataProduk = $this->upload->data();

							$info_image = pathinfo($fileDataProduk['file_name']);
							$file_name_image = $info_image['filename'];

							$upload_produk = [
								'nama_full_file' => $file_name_image,
								'nama_file' => $fileDataProduk['file_name'],
								'tipe_file' => $fileDataProduk['file_type'],
								'ukuran_file' => $fileDataProduk['file_size'],
							];
						}

						$data_image_produk = [
							'id_produk' => decrypt_url($id_produk),
							'image_produk' => $upload_produk['nama_file'],
							'image_produk_full_name' => $upload_produk['nama_full_file'],
							'image_produk_type' => $upload_produk['tipe_file'],
							'image_produk_size' => $upload_produk['ukuran_file'],
							'created_by' => $this->data['user_id'],
							'created_at' => date('Y-m-d H:i:s'),
							'updated_at' => date('Y-m-d H:i:s')
						];

						$this->Produk_model->addProdukImage($data_image_produk);
					}
				}
			}

			if ($result) {
				$this->session->set_flashdata('msg', 'Anda berhasil menyunting data produk');

				redirect('produk');
			}
		} else {
			$this->data['selected_kategori_produk'] = $this->input->post('kategori_produk');
			$this->data['produk'] = $this->input->post('produk');
			$this->data['video'] = $this->input->post('video');
			$this->data['harga'] = $this->input->post('harga');

			$this->data['list_kategori_produk'] = $this->Produk_model->getAllKategoriProduk();
			$this->data['list_presentasi'] = $this->Produk_model->getAllPresentasiProduk(decrypt_url($id_produk));
			$this->data['list_youtube'] = $this->Produk_model->getAllYoutubeProduk(decrypt_url($id_produk));

			$value_produk = $this->Produk_model->getDataProduk(decrypt_url($id_produk));
			$value_image = $this->Produk_model->getDataImageProduk(decrypt_url($id_produk));

			$this->data['id_produk'] = $id_produk;
			$this->data['selected_kategori_produk'] = $value_produk->id_kategori_produk;
			$this->data['produk'] = $value_produk->produk;
			$this->data['file_brosur'] = $value_produk->file_brosur;
			$this->data['harga'] = $value_produk->harga;
			$this->data['thumbnail'] = $value_produk->thumbnail;

			$this->data['image_1'] = (isset($value_image[0]->image_produk)) ? $value_image[0]->image_produk : NULL;
			$this->data['image_2'] = (isset($value_image[1]->image_produk)) ? $value_image[1]->image_produk : NULL;
			$this->data['image_3'] = (isset($value_image[2]->image_produk)) ? $value_image[2]->image_produk : NULL;
			$this->data['image_4'] = (isset($value_image[3]->image_produk)) ? $value_image[3]->image_produk : NULL;
			$this->data['image_5'] = (isset($value_image[4]->image_produk)) ? $value_image[4]->image_produk : NULL;
			$this->data['image_6'] = (isset($value_image[5]->image_produk)) ? $value_image[5]->image_produk : NULL;

			$this->data['id_produk_image_1'] = (isset($value_image[0]->id_produk_image)) ? $value_image[0]->id_produk_image : NULL;
			$this->data['id_produk_image_2'] = (isset($value_image[1]->id_produk_image)) ? $value_image[1]->id_produk_image : NULL;
			$this->data['id_produk_image_3'] = (isset($value_image[2]->id_produk_image)) ? $value_image[2]->id_produk_image : NULL;
			$this->data['id_produk_image_4'] = (isset($value_image[3]->id_produk_image)) ? $value_image[3]->id_produk_image : NULL;
			$this->data['id_produk_image_5'] = (isset($value_image[4]->id_produk_image)) ? $value_image[4]->id_produk_image : NULL;
			$this->data['id_produk_image_6'] = (isset($value_image[5]->id_produk_image)) ? $value_image[5]->id_produk_image : NULL;

			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->data['action'] = site_url('produk/sunting/' . $id_produk);
			$this->data['url'] = site_url('produk');
			$this->data['title'] = "Produk";

			$this->data['breadcrumbs'] = [];

			$this->data['breadcrumbs'][] = [
				'active' => FALSE,
				'text' => 'Data Master',
				'class' => 'breadcrumb-item pe-3 text-white',
				'href' => ''
			];

			$this->data['breadcrumbs'][] = [
				'active' => TRUE,
				'text' => 'Data Produk',
				'class' => 'breadcrumb-item pe-3 text-gray-400',
				'href' => site_url('produk')
			];

			$this->data['list_KBLI'] = $this->Produk_model->getAllKBLI();
			$this->data['listKBLiSelected'] = $this->Produk_model->getKBLISelected(decrypt_url($id_produk));

			$this->load->view('component/header', $this->data);
			$this->load->view('component/sidebar', $this->data);
			$this->load->view('produk/form', $this->data);
			$this->load->view('component/footer');
		}
	}

	public function detail($id_produk)
	{
		$this->data['title'] = "Produk";

		$this->data['breadcrumbs'] = [];

		$this->data['breadcrumbs'][] = [
			'active' => FALSE,
			'text' => 'Data Master',
			'class' => 'breadcrumb-item pe-3 text-white',
			'href' => ''
		];

		$this->data['breadcrumbs'][] = [
			'active' => TRUE,
			'text' => 'Data Produk',
			'class' => 'breadcrumb-item pe-3 text-gray-400',
			'href' => site_url('produk')
		];

		$this->data['url'] = site_url('produk');

		$value_produk = $this->Produk_model->getDataProduk(decrypt_url($id_produk));

		$this->data['list_dataKBLI'] = $this->Produk_model->getAllKBLIProduk(decrypt_url($id_produk));
		$this->data['list_dataImageProduk'] = $this->Produk_model->getAllImageProduk(decrypt_url($id_produk));
		$this->data['list_dataPresetasiProduk'] = $this->Produk_model->getFilePresentasiProduk(decrypt_url($id_produk));
		$this->data['list_dataYoutubeProduk'] = $this->Produk_model->getLinkYoutubeProduk(decrypt_url($id_produk));

		$data_kbli = [];
		foreach ($this->data['list_dataKBLI'] as $key => $kbli) {
			$data_kbli[] = $kbli->id_kbli;
		}

		$this->data['list_kastemer'] = $this->Produk_model->getAllKastemer($data_kbli);

		$this->data['id_produk'] = $id_produk;
		$this->data['selected_kategori_produk'] = $value_produk->id_kategori_produk;
		$this->data['kategori_produk'] = $value_produk->kategori_produk;
		$this->data['produk'] = $value_produk->produk;
		$this->data['thumbnail_full_name'] = $value_produk->thumbnail_full_name;
		$this->data['thumbnail'] = $value_produk->thumbnail;
		$this->data['file_brosur'] = $value_produk->file_brosur;
		$this->data['file_brosur_full_name'] = $value_produk->file_brosur_full_name;
		$this->data['brosur_type'] = explode('/', $value_produk->file_brosur_type);
		$this->data['harga'] = $value_produk->harga;

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('produk/detail', $this->data);
		$this->load->view('component/footer');
	}

	public function deleted($id_produk)
	{
		$data = [
			'updated_at' => date('Y-m-d H:i:s'),
			'deleted_at' => date('Y-m-d H:i:s')
		];

		$result = $this->Produk_model->deleteProduk(decrypt_url($id_produk), $data);

		if ($result) {
			$this->session->set_flashdata('msg', 'Anda berhasil menghapus data produk');

			redirect('produk');
		}
	}

	public function download($diractory, $id_produk, $id_file = NULL)
	{
		$this->load->helper('download');

		$detail_produk = $this->Produk_model->getDataProduk(decrypt_url($id_produk));

		if ($diractory == 'brosur') {
			force_download(str_replace('_', '/', 'assets/file/brosur/') . $detail_produk->file_brosur, NULL);
		}

		if ($diractory == 'presentasi') {
			$detail_presentasi = $this->Produk_model->getDetailFilePresentasi(decrypt_url($id_file));

			force_download(str_replace('_', '/', 'assets/file/presentasi/') . $detail_presentasi->file_presentasi, NULL);
		}
	}

	public function delete_file($diractory, $id_produk, $id_file = NULL)
	{
		$detail_produk = $this->Produk_model->getDataProduk(decrypt_url($id_produk));

		if ($diractory == 'produk') {
			$detail_image_produk = $this->Produk_model->getDetailImageProduk(decrypt_url($id_file));

			if (!is_null($detail_image_produk->image_produk)) {
				$path = './assets/file/produk/' . $detail_image_produk->image_produk;
				unlink($path);
			}

			$result = $this->Produk_model->deleteImageProduk(decrypt_url($id_file));

			if ($result) {
				$this->session->set_flashdata('msg', 'Anda berhasil mengahapus file gambar produk');

				redirect('produk/sunting/' . $id_produk);
			}
		}

		if ($diractory == 'brosur') {
			$data = [
				'file_brosur' => NULL,
				'file_brosur_type' => NULL,
				'file_brosur_size' => NULL,
			];

			$result = $this->Produk_model->updateProduk(decrypt_url($id_produk), $data);

			if (!is_null($detail_produk->file_brosur)) {
				$path = './assets/file/brosur/' . $detail_produk->file_brosur;
				unlink($path);
			}

			if ($result) {
				$this->session->set_flashdata('msg', 'Anda berhasil mengahapus file brosur');

				redirect('produk/sunting/' . $id_produk);
			}
		}

		if ($diractory == 'presentasi') {
			$detail_presentasi = $this->Produk_model->getDetailFilePresentasi(decrypt_url($id_file));

			if (!is_null($detail_presentasi->file_presentasi)) {
				$path = './assets/file/presentasi/' . $detail_presentasi->file_presentasi;
				unlink($path);
			}

			$result = $this->Produk_model->deletePresentasiProduk(decrypt_url($id_file));

			if ($result) {
				$this->session->set_flashdata('msg', 'Anda berhasil mengahapus file presentasi produk');

				redirect('produk/sunting/' . $id_produk);
			}
		}
	}

	public function delete_youtube($id_produk, $id_youtube)
	{
		$result = $this->Produk_model->deleteYoutubeProduk(decrypt_url($id_produk), decrypt_url($id_youtube));

		if ($result) {
			$this->session->set_flashdata('msg', 'Anda berhasil mengahapus url Youtube');

			redirect('produk/sunting/' . $id_produk);
		}
	}
}
