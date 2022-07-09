<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    // Function load view register
    public function register()
    {
        if ($this->session->userdata("login") == null && $this->session->userdata("admin") != true) {
            redirect(base_url('login'));
        }
        $this->user = $this->UserModel->getOne("id", $this->session->userdata("login"));


        $data = [
            "user" => $this->user,
        ];

        $this->load->view('registrasi', $data);
    }

    // Logic Regis
    public function post_register()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $pk = $this->input->post('pk');

        $user = $this->UserModel->getOne("username", $username);

        if ($user != null) {
            echo "
 			<script>
 				alert('Username telah terdaftar, pilih username lain');
 				document.location.href = 'registrasi';
 			</script>";
        } else {    // JIKA TIDAK ADA LAKUKAN INI
            $data = [
                "role" => "member",
                "nama" => $nama,
                "username" => $username,
                "password" => $password,
                "pk" => $pk,
            ];
            if ($this->UserModel->create($data) == 1) {    // INSERT DATA
                echo "
 				<script>
 					alert('Register berhasil');
 					document.location.href = '../Admin/index';
 				</script>";
            } else {
                echo "
 				<script>
 					alert('Register gagal');
 					document.location.href = '../auth/register';
 				</script>";
            }
        }
    }

    // Function load view login
    public function login()
    {
        $this->load->view('login');
    }

    // Logic Login
    public function post_login()
    {
        // INSERT
        $username = $this->input->post("username"); // Tangkap value di form
        $password = $this->input->post("password"); // Tangkap value di form

        // CHECK username SUDAH ADA ATAU BELUM di DB dengan memanggil MODEL getOne
        $user = $this->UserModel->getOne("username", $username);
        if ($user != null) {
            if (password_verify($password, $user->password)) {    // Verify pass
                $this->session->set_userdata(["login" => $user->id]);    // userdata di set dengan user unik id agar sistem tahu siapa yang sedang login
                if ($user->role == "admin") {
                    $this->session->set_userdata(["admin" => true]);
                    redirect(base_url("Admin/index"));
                } else {
                    redirect(base_url("Member/index"));
                }
            } else {
                echo "
 				<script>
 					alert('Password salah');
 					document.location.href = '../auth/login';
 				</script>";
            }
        } else {
            echo "
 			<script>
 				alert('Username belum terdaftar, silahkan register');
 				document.location.href = '../auth/login';
 			</script>";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Auth/login'));
    }
}
