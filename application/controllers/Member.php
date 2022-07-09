<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->home = base_url();
        $this->load->helper(array('form', 'url'));
        $this->load->model("UserModel");
        $this->load->model("PostModel");

        if ($this->session->userdata("login") == null) {
            redirect(base_url('Auth/login'));
        }
        $this->user = $this->UserModel->getOne("id", $this->session->userdata("login"));
    }

    public function index()
    {
        $data = [
            "user" => $this->user,
        ];

        $this->load->view('beranda', $data);
    }

    public function labcbsatu()
    {
        $this->load->view('pinjamcbsatu');
    }

    // LOGIC PEMINJAMAN RUANGAN
    public function pinjamRuangan()
    {
        $id = $this->input->post("id");
        $nama = $this->input->post("nama");
        $nim = $this->input->post("nim");
        $pk = $this->input->post("pk");
        $ruangan = $this->input->post("ruangan");
        $jam = $this->input->post("jam");
        $berakhir = $this->input->post("berakhir");
        // $status = $this->input->post("status");

        $data = [
            "id" => $id,
            "nama" => $nama,
            "nim" => $nim,
            "pk" => $pk,
            "jam" => $jam,
            "ruangan" => $ruangan,
            "berakhir" => $berakhir,
            "status" => "Ruangan Sedang di Gunakan",
        ];

        // LOGIC INSERT DATA
        if ($this->PostModel->create($data) != 1) {
            echo "
                <script>
                    alert('Data Gagal Terkirim');
                    document.location.href = 'labcbsatu';
                </script>";
        } else {
            echo "
                <script>
                    alert('Data Berhasil Terkirim');
                    document.location.href = 'index';
                </script>";
        }
    }
}
