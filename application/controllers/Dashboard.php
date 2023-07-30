<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
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

// public function cari_data()
// {
//     // Pastikan permintaan adalah POST
//     if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//         http_response_code(400);
//         echo json_encode(['error' => 'Bad request']);
//         return;
//     }

//     // Ambil data hasil pemindaian dari POST data
//     $id_barang = $_POST['id_barang'];

//     // Lakukan operasi lain yang diperlukan dengan data $id_barang
//     $query = $this->db->select('*')->from('tbl_barang')
//         ->where('id_barang >=', $id_barang)
//         ->get();
//     $barang = $query->result();
//     $master = $this->Mcrud->get_all_data('tbl_master_barang')->result();

//     // Setelah selesai, tentukan URL redirect (misalnya, 'dashboard' atau halaman lain yang sesuai)
//     $redirect_url = base_url('dashboard'); // Ubah 'dashboard' sesuai dengan URL yang diinginkan

//     // Kirimkan URL redirect sebagai respons
//     header('Content-Type: application/json');
//     echo json_encode(['redirect_url' => $redirect_url]);
//     return;
// }
}