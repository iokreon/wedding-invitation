<?php

// panggil koneksi database
include "koneksi.php";

// uji jika tombol simpan di klik 
// if (isset($_POST['bsimpan'])) {

//     // persiapan simpan data baru
//     $simpan = mysqli_query($koneksi, "INSERT INTO tpesan(nama, pesan)
//                                       VALUES ('$_POST[tnama]',
//                                               '$_POST[tpesan]')");
//     // jika simpan sukses
//     if ($simpan) {
//         echo "<script>
//                 alert('Simpan data Sukses!');
//                 document.location='admin.php';    
//             </script>";
//     } else
//     {
//         echo "<script>
//                 alert('Simpan data Gagal!');
//                 document.location='admin.php';    
//             </script>";
//     }
// }

// uji jika tombol Ubah di klik 
if (isset($_POST['bubah'])) {

    // persiapan Ubah Data 
    $ubah = mysqli_query($koneksi, "UPDATE tpesan SET
                                                       nama = '$_POST[tnama]',
                                                       pesan = '$_POST[tpesan]'
                                                    WHERE id_pesan = '$_POST[id_pesan]'
                                                        ");

    // jika ubah sukses
    if ($ubah) {
        echo "<script>
                alert('ubah data Sukses!');
                document.location='admin.php';    
            </script>";
    } else
    {
        echo "<script>
                alert('ubah data Gagal!');
                document.location='admin.php';    
            </script>";
    }
}

// uji jika tombol hapus di klik 
if (isset($_POST['bhapus'])) {

    // persiapan hapus Data 
    $hapus = mysqli_query($koneksi, "DELETE FROM tpesan WHERE id_pesan = '$_POST[id_pesan]' ");

    // jika hapus sukses
    if ($hapus) {
        echo "<script>
                alert('Hapus data Sukses!');
                document.location='admin.php';    
            </script>";
    } else
    {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='admin.php';    
            </script>";
    }
}