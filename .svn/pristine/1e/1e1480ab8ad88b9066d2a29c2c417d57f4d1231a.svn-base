<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_produk extends CI_Controller
{
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

            $this->data['link_active'] = 'kategori-produk';

            //buat permission
            if (!$this->tank_auth->permit($this->data['link_active'])) {
                redirect('Home');
            }

            $this->load->model("Showmenu_model");
            $this->data['ShowMenu'] = $this->Showmenu_model->getShowMenu();

            $OpenShowMenu = $this->Showmenu_model->getOpenShowMenu($this->data);

            $this->data['openMenu'] = $this->Showmenu_model->getDataOpenMenu($OpenShowMenu->id_menu_parent);

            $this->load->model("Menu_model");
            $this->load->model('Kategori_produk_model');
        }
    }

    public function index()
    {
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
            'text' => 'Data Kategori Produk',
            'class' => 'breadcrumb-item pe-3 text-gray-400',
            'href' => site_url('kategori-produk')
        ];

        $this->data['list_kategori'] = $this->Kategori_produk_model->getAllKategori();

        $this->load->view('component/header', $this->data);
        $this->load->view('component/sidebar', $this->data);
        $this->load->view('kategori_produk/views', $this->data);
        $this->load->view('component/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required|trim');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'kategori_produk' => $this->input->post('kategori_produk'),
                'created_by' => $this->data['user_id'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            $result = $this->Kategori_produk_model->addKategori($data);

            if ($result) {
                $this->session->set_flashdata('message_success', 'Berhasil menambahkan data kategori produk');

                redirect('kategori-produk');
            }
        } else {
            $this->data['kategori_produk'] = $this->input->post('kategori_produk');

            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->data['action'] = site_url('kategori-produk/tambah');
            $this->data['url'] = site_url('kategori-produk');
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
                'text' => 'Data Kategori Produk',
                'class' => 'breadcrumb-item pe-3 text-gray-400',
                'href' => site_url('kategori-produk')
            ];

            $this->load->view('component/header', $this->data);
            $this->load->view('component/sidebar', $this->data);
            $this->load->view('kategori_produk/form', $this->data);
            $this->load->view('component/footer');
        }
    }

    public function update($id_kategori_produk)
    {
        $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required|trim');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'kategori_produk' => $this->input->post('kategori_produk'),
                'created_by' => $this->data['user_id'],
                'updated_at' => date('Y-m-d H:i:s')
            );

            $result = $this->Kategori_produk_model->updateKategori($data, decrypt_url($id_kategori_produk));

            if ($result) {
                $this->session->set_flashdata('message_success', 'Berhasil menyunting data kategori produk');

                redirect('kategori-produk');
            }
        } else {
            $this->data['kategori_produk'] = $this->input->post('kategori_produk');

            $kategori_produk = $this->Kategori_produk_model->getDetailKategori(decrypt_url($id_kategori_produk));

            $this->data['kategori_produk'] = $kategori_produk->kategori_produk;

            $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->data['action'] = site_url('kategori-produk/sunting/' . $id_kategori_produk);
            $this->data['url'] = site_url('kategori-produk');
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
                'text' => 'Data Kategori Produk',
                'class' => 'breadcrumb-item pe-3 text-gray-400',
                'href' => site_url('kategori-produk')
            ];

            $this->load->view('component/header', $this->data);
            $this->load->view('component/sidebar', $this->data);
            $this->load->view('kategori_produk/form', $this->data);
            $this->load->view('component/footer');
        }
    }

    public function detail($id_kategori_produk)
    {
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
            'text' => 'Data Kategori Produk',
            'class' => 'breadcrumb-item pe-3 text-gray-400',
            'href' => site_url('kategori-produk')
        ];

        $detail_kategori_produk = $this->Kategori_produk_model->getDetailKategori(decrypt_url($id_kategori_produk));
        $this->data['list_produk'] = $this->Kategori_produk_model->getListProduk(decrypt_url($id_kategori_produk));

		$this->data['kategori_produk'] = $detail_kategori_produk->kategori_produk;

        $this->load->view('component/header', $this->data);
        $this->load->view('component/sidebar', $this->data);
        $this->load->view('kategori_produk/detail', $this->data);
        $this->load->view('component/footer');
    }

    public function detail_produk($id_produk)
    {
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
            'text' => 'Data Kategori Produk',
            'class' => 'breadcrumb-item pe-3 text-gray-400',
            'href' => site_url('kategori-produk')
        ];

        $detail_produk = $this->Kategori_produk_model->getDetailProduk(decrypt_url($id_produk));
        $this->data['list_kastemer'] = $this->Kategori_produk_model->getListKastemer(decrypt_url($id_produk));

		$this->data['kategori_produk'] = $detail_produk->kategori_produk;
		$this->data['produk'] = $detail_produk->produk;

        $this->load->view('component/header', $this->data);
        $this->load->view('component/sidebar', $this->data);
        $this->load->view('kategori_produk/detail_kategori_produk', $this->data);
        $this->load->view('component/footer');
    }
}
