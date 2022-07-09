<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Beranda</title>
</head>

<body>

    <nav class="navbar navbar-light bg-primary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="<?= base_url() ?>">BERANDA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Daftar Ruangan</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Member/index">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Auth/login">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="row mt-5">
        <div class="col-sm-8 m-auto pt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">PINJAM RUANGAN</h5>
                    <hr />
                    <p class="card-text">Harap Mahasiswa Mengisi Form Peminjaman dengan data yang valid</p>
                    <a href="<?= base_url(); ?>Member/labcbsatu" class="btn btn-primary">Pinjam Ruangan</a>
                </div>
            </div>
        </div>
        <!-- <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ruangan CB 2</h5>
                    <p class="card-text">Ruangan ini berada di gedung CB lantai 2</p>
                    <a href="#" class="btn btn-primary">Pinjam Ruangan</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ruangan CB 3</h5>
                    <p class="card-text">Ruangan ini berada di gedung CB lantai 2</p>
                    <a href="#" class="btn btn-primary">Pinjam Ruangan</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ruangan CB 4</h5>
                    <p class="card-text">Ruangan ini berada di gedung CB lantai 2</p>
                    <a href="#" class="btn btn-primary">Pinjam Ruangan</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ruangan CB 5</h5>
                    <p class="card-text">Ruangan ini berada di gedung CB lantai 2</p>
                    <a href="#" class="btn btn-primary">Pinjam Ruangan</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ruangan CA 1</h5>
                    <p class="card-text">Ruangan ini berada di gedung CA lantai 1</p>
                    <a href="#" class="btn btn-primary">Pinjam Ruangan</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ruangan CA 2</h5>
                    <p class="card-text">Ruangan ini berada di gedung CA lantai 1</p>
                    <a href="#" class="btn btn-primary">Pinjam Ruangan</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ruangan CB Pemrograman</h5>
                    <p class="card-text">Ruangan ini berada di gedung CB</p>
                    <a href="#" class="btn btn-primary">Pinjam Ruangan</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ruangan CB K-70</h5>
                    <p class="card-text">Ruangan ini berada di gedung CB</p>
                    <a href="#" class="btn btn-primary">Pinjam Ruangan</a>
                </div>
            </div>
        </div> -->
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