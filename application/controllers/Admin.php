<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
        $this->load->model("PostModel");
        $this->load->library('form_validation');
        $this->load->helper('form');

        if ($this->session->userdata("login") == null && $this->session->userdata("admin") != true) {
            redirect(base_url('login'));
        }
        $this->user = $this->UserModel->getOne("id", $this->session->userdata("login"));
    }


    // PAGES
    public function index()
    {
        $data = [
            "user" => $this->user,
            "accountMember" =>  $this->UserModel->getAll(), // Mengambil semua data di table user
            "postMember" =>  $this->PostModel->getAll(), // Mengambil semua data di table post
        ];

        $this->load->view('admin', $data);
    }

    public function akun()
    {
        $data = [
            "user" => $this->user,
            "accountMember" =>  $this->UserModel->getAll(), // Mengambil semua data di table user
        ];
        $this->load->view('pengguna', $data);
    }


    // LOGIC
    public function fungsiDelete($id)
    {
        $this->PostModel->deletePost($id);
        redirect(base_url('Admin/index'));
    }

    public function deleteAkun($id)
    {
        $this->UserModel->deleteUser($id);
        redirect(base_url('Admin/akun'));
    }

    public function updatePost($id)
    {
        $data = [
            "id" => $id,
            "nama" => $this->input->post("nama"),
            "nim" => $this->input->post("nim"),
            "pk" => $this->input->post("pk"),
            "ruangan" => $this->input->post("ruangan"),
            "jam" => $this->input->post("jam"),
            "berakhir" => $this->input->post("berakhir"),
            "status" => $this->input->post("status"),
        ];
        $this->PostModel->updatePostRuangan($data, 'post');
        redirect(base_url('Admin/index'));
    }
}
