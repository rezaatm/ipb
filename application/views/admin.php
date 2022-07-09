<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css">

    <title>Admin</title>
</head>

<body>
    <nav class="navbar navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="<?= base_url(); ?>Admin/index">ADMIN</a>
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
                            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>Auth/register">Daftar</a>
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

    <!-- MODAL START -->
    <?php foreach ($postMember as $postMembers) : ?>
        <div class="modal fade" id="exampleModal<?= $postMembers->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Peminjaman Ruangan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form class="form" role="form" method="post" action="<?= base_url('Admin/updatePost/' . $postMembers->id) ?>">
                            <div class="mb-3">
                                <label class="form-label"> Nama</label>
                                <input value="<?= $postMembers->id; ?>" type="hidden" name="id">
                                <input class="form-control" id="nama" name="nama" value="<?= $postMembers->nama; ?>" type="text" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Induk Mahasiswa </label>
                                <input type="text" placeholder='Masukkan NIM' class="form-control" id="nim" name="nim" value="<?= $postMembers->nim; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">PK</label>
                                <input type="text" placeholder='Masukkan PK' class="form-control" id="pk" name="pk" value="<?= $postMembers->pk; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pilih Ruangan</label>
                                <input type="text" class="form-control" id="ruangan" name="ruangan" value="<?= $postMembers->ruangan ?>" disabled>
                                <select id="ruangan" name="ruangan" class="form-select">
                                    <option id="ruangan" name="ruangan" value="<?= $postMembers->ruangan ?>">- Pilih Ruangan -</option>
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
                                <input type="text" placeholder='Masuk' class="form-control" id="jam" name="jam" value="<?= $postMembers->jam ?>" disabled>
                                <input type="datetime-local" placeholder='Masuk' class="form-control" id="jam" name="jam" value="<?= $postMembers->jam ?>">
                            </div>
                            <div class="mb-3">
                                <label for="birthdaytime">Jam Keluar</label>
                                <input type="text" class="form-control" id="berakhir" name="berakhir" value="<?= $postMembers->berakhir ?>" disabled>
                                <input type="datetime-local" placeholder='Jam Berakhir' class="form-control" id="berakhir" name="berakhir" value="<?= $postMembers->berakhir ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Edit Status Ruangan</label>
                                <input type="text" class="form-control" id="status" name="status" value="<?= $postMembers->status ?>" disabled>
                                <select id="status" name="status" class="form-control">
                                    <option id="status" name="status" value="<?= $postMembers->status ?>">- Pilih Status -</option>
                                    <option id="status" name="status" value="Ruangan Sedang di Gunakan">- Ruangan Sedang di Gunakan -</option>
                                    <option id="status" name="status" value="Ruangan Selesai di Gunakan">- Ruangan Selesai di Gunakan -</option>
                                </select>
                            </div>
                            <!-- BUTTON -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- MODAL END -->

    <!-- MAIN CONTENT -->
    <div class="container-fluid" style="margin-top: 5vh;">
        <table id="example1" class="table table-striped" style="width:100%;">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>PK</th>
                    <th>Ruangan</th>
                    <th>Jam</th>
                    <th>Berakhir</th>
                    <td>Status</td>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($postMember as $postMembers) : ?>
                    <tr class="table-warning">
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $postMembers->nama; ?></td>
                        <td><?= $postMembers->nim; ?></td>
                        <td><?= $postMembers->pk; ?></td>
                        <td><?= $postMembers->ruangan; ?></td>
                        <td><?= $postMembers->jam; ?></td>
                        <td><?= $postMembers->berakhir; ?></td>
                        <td><?= $postMembers->status; ?></td>
                        <td>
                            <div class="wrapper-button">
                                <!-- DELETE -->
                                <a class="btn btn-sm swalDefaultSuccess" href="fungsiDelete/<?= $postMembers->id; ?>">❌</a>
                                <!-- UPDATE -->
                                <a class=" btn btn-sm swalDefaultSucces" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $postMembers->id ?>" data-target="#exampleModal<?= $postMembers->id ?>">✏️</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <!-- MAIN CONTENT -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#example1").DataTable({
                dom: "Bfrtip",
                buttons: ["copy", "csv", "excel", "pdf", "print"],
            });
        });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>