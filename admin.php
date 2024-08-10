<?php
// Panggil Koneksi Database
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="mt-3">
            <h3 class="text-center">Tabel Pesan</h3>
        </div>

        <div class="card mt-3">
            <div class="card-header bg-primary text-white">
                Data Pesan
            </div>
            <div class="card-body">

            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                Tambah Data
            </button> -->

            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>

                <?php
                // persiapan menampilkan data
                $no = 1;
                $tampil = mysqli_query($koneksi, "SELECT * FROM tpesan ORDER BY id_pesan DESC");
                while($data = mysqli_fetch_array($tampil)) :

                ?>

                <tr>
                    <td><?= $no++?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['pesan'] ?></td>
                    <td>
                        <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>">Ubah</a>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>">Hapus</a>
                    </td>
                </tr>

                <!-- Awal Modal Ubah -->
                <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Pesan Masuk</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="aksi_crud.php">
                        <input type="hidden" name="id_pesan" value="<?=$data['id_pesan']?>">
                    <div class="modal-body">

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="tnama" value="<?=$data['nama'] ?>" placeholder="Masukkan Nama Anda!">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pesan</label>
                                <input type="text" class="form-control" name="tpesan" value="<?=$data['pesan'] ?>" placeholder="Masukkan Pesan Anda!">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary" name="bubah">Ubah</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
                <!-- Akhir Modal Ubah-->

                <!-- Awal Modal Hapus -->
                <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Konfirmasi Hapus Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="aksi_crud.php">
                        <input type="hidden" name="id_pesan" value="<?=$data['id_pesan']?>">
                    
                        <div class="modal-body">

                        <h5 class="text-center">Apakah anda yakin akan menghapus data ini? <br>
                            <span class="text-danger"><?=$data['nama'] ?></span>
                        </h5>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
                <!-- Akhir Modal Hapus-->

                <?php endwhile; ?>
            </table>

            <!-- Awal Modal Tambah-->
            <!-- <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Pesan Masuk</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="aksi_crud.php">
                <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="tnama"placeholder="Masukkan Nama Anda!">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <input type="text" class="form-control" name="tpesan"placeholder="Masukkan Pesan Anda!">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                </div>
                </form>
                </div>
            </div>
            </div> -->
            <!-- Akhir Modal Tambah-->

            </div>
        </div>

         <!-- button logout -->
        <!-- <div class="container"> -->
        <!-- Konten lainnya -->
    
        <!-- Tombol Logout -->
        <form action="logout.php" method="post">
            <button type="submit" class="btn btn-danger mt-3">Logout</button>
        </form>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>