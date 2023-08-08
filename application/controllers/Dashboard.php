<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
        $this->cek_login();
    }
    // public function cek_login()
    // {
    //     if (empty($this->session->userdata('username'))) {
    //         redirect('Login');

    //     }
    //     $username = $this->session->userdata('username');
    //     $level = $this->session->userdata('level');
    //     if (empty($username) || empty($level)) {
    //         $this->session->set_flashdata('flash', 'Harus Login Dahulu');
    //         redirect('Login');
    //     }

    //     if ($level == 'admin') {
    //         redirect('Adminpanel');
    //     } elseif ($level == 'siswa') {
    //         redirect('Dashboard');
    //     } elseif ($level == 'guru') {
    //         redirect('Dashboard');
    //     }
    // }
    public function cek_login()
    {
        if (empty($this->session->userdata('username'))) {
            redirect('Login');
        } elseif ($this->session->userdata('level') == 'admin') {
            redirect('Adminpanel');
        }
    }
    public function index()
    {
        $data['content'] = "dashboard";
        $data['barang'] = $this->Mcrud->get_all_data('tbl_barang')->result();
        $data['master'] = $this->Mcrud->get_all_data('tbl_master_barang')->result();

        //load view
        $this->load->view('dashboard', $data);
    }
    public function cari_id()
    {
        $id_barang = $_POST['id_barang'];
        $data['id_barang'] = $id_barang;
        $data['content'] = "dashboard";
        $query = $this->db->select('*')->from('tbl_barang')
            ->where('id_barang >=', $id_barang)
            ->get();
        $data['barang'] = $query->result();
        $data['master'] = $this->Mcrud->get_all_data('tbl_master_barang')->result();

        //load view
        $this->load->view('dashboard', $data);
    }
    public function cari_id_JSON()
    {
        $id_barang = $_POST['id_barang'];

        // Query untuk mengambil data barang berdasarkan id_barang
        $query = $this->db->select('*')->from('tbl_barang')
            ->where('id_barang =', $id_barang)
            ->get();
        $barang = $query->result();

        // Query untuk mengambil semua data dari tabel tbl_master_barang
        $master = $this->Mcrud->get_all_data('tbl_master_barang')->result();

        // Menyusun data hasil query ke dalam array
        $data = array(
            'id_barang' => $id_barang,
            'barang' => $barang,
            'master' => $master
        );

        // Mengirim data dalam format JSON
        header('Content-Type: application/json');
        echo json_encode($data);
    }
    public function add_laporan()
    {
        // get data
        $id_barang = $_POST['id_barang'];
        $id_user = $this->session->userdata('id_user');
        // save data
        $datainsert = array(
            'id_barang' => $id_barang,
            'id_user' => $id_user,
            'status' => 'Diproses'
        );
        // Upload data ke tabel 'tbl_laporan'
        $this->Mcrud->insert('tbl_laporan', $datainsert);
        $this->session->set_flashdata('flash', 'Dilaporkan');
        redirect('Dashboard');
    }
}