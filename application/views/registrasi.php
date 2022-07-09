<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar</title>
</head>

<body>
    <nav class="navbar navbar-light bg-success fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url(); ?>Admin/index">ADMIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ADMIN</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Admin/index">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Admin/akun">Pengguna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Auth/login">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="card-header mt-5">
        <figure class="text-center pt-3">
            <blockquote class="blockquote">
                <h1>DAFTAR</h1>
            </blockquote>
            <figcaption class="blockquote-footer">
                <small>Institut Pertanian Bogor</small>
            </figcaption>
        </figure>
    </div>

    <!--form mulai-->
    <div class="container">
        <form class="form" role="form" method="post" action="post_register">
            <div class="mb-3">
                <label class="form-label"> Nama</label>
                <input type="text" placeholder='Masukkan Nama' class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Username </label>
                <input type="text" placeholder='Masukkan Username' class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" placeholder="Masukkan Password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label class="form-label">PK</label>
                <input type="text" placeholder='Masukkan PK' class="form-control" id="pk" name="pk" required>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <footer class="bg-dark text-center text-lg-start">
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