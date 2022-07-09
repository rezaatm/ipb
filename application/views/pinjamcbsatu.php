<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pinjam Ruang</title>
</head>

<body>

    <!--navbar dimulai-->
    <nav class="navbar navbar-light bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="<?= base_url() ?>Member/labcbsatu">PEMINJAMAN RUANG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PEMINJAMAN RUANGAN</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Member/index">Beranda</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--navbar selesai-->

    <!--form mulai-->
    <div class="container">
        <form class="form" style="margin-top: 15vh;" role="form" method="post" action="<?= base_url('Member/pinjamRuangan') ?>">
            <div class="mb-3">
                <label class="form-label"> Nama</label>
                <input type="text" placeholder='Masukkan Nama' class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Induk Mahasiswa </label>
                <input type="text" placeholder='Masukkan NIM' class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label class="form-label">PK</label>
                <input type="text" placeholder='Masukkan PK' class="form-control" id="pk" name="pk" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Pilih Ruangan</label>
                <select id="ruangan" name="ruangan" class="form-select" required>
                    <option name="CB 1">CB 1</option>
                    <option name="CB 2">CB 2</option>
                    <option name="CB 3">CB 3</option>
                    <option name="CB 4">CB 4</option>
                    <option name="CB 5">CB 5</option>
                    <option name="CA 1">CA 1</option>
                    <option name="CA 2">CA 2</option>
                    <option name="CB Pemrograman">CB Pemrograman</option>
                    <option name="CB K-70">CB K-70</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="birthdaytime">Jam Masuk</label>
                <input type="datetime-local" placeholder='Masuk' class="form-control" id="jam" name="jam" required>
            </div>
            <div class="mb-3">
                <label for="birthdaytime">Jam Keluar</label>
                <input type="datetime-local" placeholder='Keluar' class="form-control" id="berakhir" name="berakhir" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="status" name="status" hidden>
            </div>
            <!-- BUTTON -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <footer class="bg-dark text-center text-lg-start ">
  <!-- Copyright -->
  <div class="text-center p-3 text-white mt-5">
    <p> © 2021 Copyright: SMKN 3 Bogor </p>
  </div>
  <!-- Copyright -->
</footer>

    <!-- Content Wrapper. Contains page content -->
    <!-- <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">

        <div class="tab-content pt-5">
            <div class="tab-empty">

                <div class="login-box">

                    <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            <a href="#" class="h1"><b>Institut Pertanian Bogor</b></a>
                        </div>
                        <div class="card-body">
                            <p class="login-box-msg">Buat Akun SAPA</p>

                            <form class="form" role="form" method="post" action="post_register">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="input-group mb-3">
                                            <input class="form-control" placeholder="Username" type="text" id='username' name="username" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-user"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input class="form-control" placeholder="Email" type="email" id='email' name="email" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="password" name='password' class="form-control" placeholder="Password" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form> -->














    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>