<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk_public extends CI_Controller
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

			$this->data['link_active'] = 'produk-public';

			//buat permission
			if (!$this->tank_auth->permit($this->data['link_active'])) {
				redirect('Home');
			}

			$this->load->model("Showmenu_model");
			$this->data['ShowMenu'] = $this->Showmenu_model->getShowMenu();

			$OpenShowMenu = $this->Showmenu_model->getOpenShowMenu($this->data);

			$this->data['openMenu'] = $this->Showmenu_model->getDataOpenMenu($OpenShowMenu->id_menu_parent);

			$this->load->model("Menu_model");
			$this->load->model('Produk_public_model');
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
			'href' => site_url('produk-public')
		];

		$jumlah_data = $this->Produk_public_model->jumlahDataProduk();

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

		$config['base_url'] = base_url() . 'produk-public';

		if (isset($_GET['show-row']) && !empty($_GET['show-row'])) {
			$config['per_page'] = $_GET['show-row'];
		} else {
			$config['per_page'] = 12;
		}

		// $config['per_page'] = 12;

		$this->data['per_page'] = (isset($_GET['show-row'])) ? $_GET['show-row'] : 12;

		$from = (isset($_GET['per_page'])) ? $_GET['per_page'] : NULL;

		$this->pagination->initialize($config);

		$this->data['list_produk'] = $this->Produk_public_model->getAllProduk($config['per_page'], $from);

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('produk_public/views', $this->data);
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
			'href' => site_url('produk-public')
		];

		$this->data['keyword'] = $_GET['keyword'];

		// get search string
		$search = ($this->data['keyword']) ? $this->data['keyword'] : NULL;
		$search = ($this->uri->segment(3)) ? $this->uri->segment(3) : $search;

		if (is_null($search)) {
			redirect('produk-public');
		}

		$this->data['keyword'] = $search;

		$jumlah_data = $this->Produk_public_model->jumlahDataProdukSearch($search);

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

		$config['base_url'] = site_url("produk-public/search");

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

		$this->data['list_produk'] = $this->Produk_public_model->getProduk($config['per_page'], $this->data['page'], $search);

		$this->load->view('component/header', $this->data);
		$this->load->view('component/sidebar', $this->data);
		$this->load->view('produk_public/views', $this->data);
		$this->load->view('component/footer');
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
			'href' => site_url('produk-public')
		];

		$this->data['url'] = site_url('produk-public');

		$value_produk = $this->Produk_public_model->getDataProduk(decrypt_url($id_produk));

		$this->data['list_dataKBLI'] = $this->Produk_public_model->getAllKBLIProduk(decrypt_url($id_produk));
		$this->data['list_dataImageProduk'] = $this->Produk_public_model->getAllImageProduk(decrypt_url($id_produk));
		$this->data['list_dataPresetasiProduk'] = $this->Produk_public_model->getFilePresentasiProduk(decrypt_url($id_produk));
		$this->data['list_dataYoutubeProduk'] = $this->Produk_public_model->getLinkYoutubeProduk(decrypt_url($id_produk));

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
		$this->load->view('produk_public/detail', $this->data);
		$this->load->view('component/footer');
	}

	public function download($diractory, $id_produk, $id_file = NULL)
	{
		$this->load->helper('download');

		$detail_produk = $this->Produk_public_model->getDataProduk(decrypt_url($id_produk));

		if ($diractory == 'brosur') {
			force_download(str_replace('_', '/', 'assets/file/brosur/') . $detail_produk->file_brosur, NULL);
		}

		if ($diractory == 'presentasi') {
			$detail_presentasi = $this->Produk_public_model->getDetailFilePresentasi(decrypt_url($id_file));

			force_download(str_replace('_', '/', 'assets/file/presentasi/') . $detail_presentasi->file_presentasi, NULL);
		}
	}
}
